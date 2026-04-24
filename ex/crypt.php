<?php
declare(strict_types=1);

class Crypt
{
    private const METHOD = "AES-256-CBC";
    private const IV_LENGTH = 16;
    private const HMAC_LENGTH = 32;

    private string $password;

    public function __construct(string $passkey)
    {
        if ($passkey === "") {
            throw new InvalidArgumentException("Passkey must not be empty.");
        }

        $this->password = $passkey;
    }

    public function enc(string $plaintext): string
    {
        $key = $this->key();
        $iv = random_bytes(self::IV_LENGTH);
        $ciphertext = openssl_encrypt($plaintext, self::METHOD, $key, OPENSSL_RAW_DATA, $iv);

        if ($ciphertext === false) {
            throw new RuntimeException("Encryption failed.");
        }

        $hash = hash_hmac("sha256", $ciphertext, $key, true);

        return base64_encode($iv . $hash . $ciphertext);
    }

    public function dec(string $ivHashCiphertext): ?string
    {
        $payload = base64_decode($ivHashCiphertext, true);

        if ($payload === false || strlen($payload) < self::IV_LENGTH + self::HMAC_LENGTH) {
            return null;
        }

        $iv = substr($payload, 0, self::IV_LENGTH);
        $hash = substr($payload, self::IV_LENGTH, self::HMAC_LENGTH);
        $ciphertext = substr($payload, self::IV_LENGTH + self::HMAC_LENGTH);
        $key = $this->key();
        $expectedHash = hash_hmac("sha256", $ciphertext, $key, true);

        if (!hash_equals($expectedHash, $hash)) {
            return null;
        }

        $plaintext = openssl_decrypt($ciphertext, self::METHOD, $key, OPENSSL_RAW_DATA, $iv);

        return $plaintext === false ? null : $plaintext;
    }

    private function key(): string
    {
        return hash("sha256", $this->password, true);
    }
}

/* Usage:
$crp = new Crypt(getenv("CRYPT_PASSPHRASE") ?: "local-demo-passkey-change-me");
$encStr = $crp->enc("Exempelsträng");
$decStr = $crp->dec($encStr);
*/
