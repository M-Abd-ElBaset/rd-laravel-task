<?php
namespace App;

class OpenSSLEncryption {
    $key = env('APP_KEY');
    
    public static encrypt($raw_string) {
        $cipher = "AES-256-CBC";
        $iv_len = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($iv_len);
        $cipher_text_raw = openssl_encrypt($raw_string, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $cipher_text_raw, $key, $as_binary=true);
        $cipher_text = base64_encode( $iv.$hmac.$ciphertext_raw );
        return $cipherText;
    }

    public static decrypt($cipher_string) {
        $c = base64_decode($cipher_string);
        $cipher = "AES-256-CBC";
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = substr($c, 0, $ivlen);
        $hmac = substr($c, $ivlen, $sha2len=32);
        $ciphertext_raw = substr($c, $ivlen+$sha2len);
        $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
        // $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
        return $original_plaintext;
    }
}