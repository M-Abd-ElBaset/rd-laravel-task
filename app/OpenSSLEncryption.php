<?php
namespace App;

class OpenSSLEncryption {
    const INPUT_ENC_METHOD = "AES-256-CBC";
    const KEY_ENC_METHOD = "SHA256";

    private static $key;    
    private static $iv;
    private static $options;
    
    public function __construct(){
        self::$key = "12345678901234567890123456789012";
        // $this->key = hash( self::KEY_ENC_METHOD, env('APP_KEY'));
        self::$iv = str_repeat("0", openssl_cipher_iv_length(self::INPUT_ENC_METHOD));
    }

    // public function encrypt($input){
    //     return base64_encode(openssl_encrypt($input, self::INPUT_ENC_METHOD, $this->key, 0, $this->iv));
    // }
    
    // public function decrypt($encrypted_input){
    //     return openssl_decrypt(base64_decode($encrypted_input), self::INPUT_ENC_METHOD, $this->key, 0, $this->iv);
    // }
    
    public static function encrypt($raw_string) {
        return openssl_encrypt($raw_string, self::INPUT_ENC_METHOD, self::$key, self::$options, self::$iv);
    }

    public static function decrypt($cipher_string) {
        // $key = env('APP_KEY');
        // $c = base64_decode($cipher_string);
        // $cipher = "AES-256-CBC";
        // $ivlen = openssl_cipher_iv_length($cipher);
        // $iv = substr($c, 0, $ivlen);
        // $hmac = substr($c, $ivlen, $sha2len=32);
        // $ciphertext_raw = substr($c, $ivlen+$sha2len);
        // $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        // // $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        // return $original_plaintext;
        return openssl_decrypt($cipher_string, self::INPUT_ENC_METHOD, self::$key, self::$options, self::$iv);
    }
}