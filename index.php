<?php
require 'class.caesarcipher.php';
require 'fixture/class.test.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caesar Cipher Test Fixture</title>
  </head>
  <body>
    <h1>Caesar Cipher Test Fixture</h1>
    <h2>Initialization Tests</h2>
    <?php
    $init = new Test;
    $init->assert_equals((new CaesarCipher)->shift, 0);
    $init->assert_equals((new CaesarCipher(1))->shift, 1);
    $init->assert_equals((new CaesarCipher(2))->shift, 2);
    $init->assert_equals((new CaesarCipher(3))->shift, 3);
    $init->assert_equals((new CaesarCipher(4))->shift, 4);
    $init->assert_equals((new CaesarCipher(5))->shift, 5);
    $init->assert_equals((new CaesarCipher(6))->shift, 6);
    $init->assert_equals((new CaesarCipher(7))->shift, 7);
    $init->assert_equals((new CaesarCipher(8))->shift, 8);
    $init->assert_equals((new CaesarCipher(9))->shift, 9);
    $init->assert_equals((new CaesarCipher(10))->shift, 10);
    $init->assert_equals((new CaesarCipher(11))->shift, 11);
    $init->assert_equals((new CaesarCipher(12))->shift, 12);
    $init->assert_equals((new CaesarCipher(13))->shift, 13);
    $init->assert_equals((new CaesarCipher(14))->shift, 14);
    $init->assert_equals((new CaesarCipher(15))->shift, 15);
    $init->assert_equals((new CaesarCipher(16))->shift, 16);
    $init->assert_equals((new CaesarCipher(17))->shift, 17);
    $init->assert_equals((new CaesarCipher(18))->shift, 18);
    $init->assert_equals((new CaesarCipher(19))->shift, 19);
    $init->assert_equals((new CaesarCipher(20))->shift, 20);
    $init->assert_equals((new CaesarCipher(21))->shift, 21);
    $init->assert_equals((new CaesarCipher(22))->shift, 22);
    $init->assert_equals((new CaesarCipher(23))->shift, 23);
    $init->assert_equals((new CaesarCipher(24))->shift, 24);
    $init->assert_equals((new CaesarCipher(25))->shift, 25);
    $init->assert_equals((new CaesarCipher(26))->shift, 0);
    $init->assert_equals((new CaesarCipher(27))->shift, 1);
    $init->assert_equals((new CaesarCipher(28))->shift, 2);
    $init->assert_equals((new CaesarCipher(29))->shift, 3);
    $init->assert_equals((new CaesarCipher(30))->shift, 4);
    $init->print_summary();
    ?>
    <h2>Alphabet Constant Tests</h2>
    <?php
    $alphabet = new Test;
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][0], "a");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][1], "b");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][2], "c");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][3], "d");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][4], "e");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][5], "f");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][6], "g");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][7], "h");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][8], "i");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][9], "j");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][10], "k");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][11], "l");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][12], "m");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][13], "n");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][14], "o");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][15], "p");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][16], "q");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][17], "r");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][18], "s");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][19], "t");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][20], "u");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][21], "v");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][22], "w");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][23], "x");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][24], "y");
    $alphabet->assert_equals(CaesarCipher::alphabet["lowercase"][25], "z");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][0], "A");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][1], "B");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][2], "C");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][3], "D");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][4], "E");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][5], "F");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][6], "G");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][7], "H");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][8], "I");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][9], "J");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][10], "K");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][11], "L");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][12], "M");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][13], "N");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][14], "O");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][15], "P");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][16], "Q");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][17], "R");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][18], "S");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][19], "T");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][20], "U");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][21], "V");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][22], "W");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][23], "X");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][24], "Y");
    $alphabet->assert_equals(CaesarCipher::alphabet["uppercase"][25], "Z");
    $alphabet->print_summary();
    ?>
    <h2>Encryption/Decryption Tests</h2>
    <?php
    $main = new Test;
    $cipher = new CaesarCipher(1);
    $main->assert_equals($cipher->encrypt("hello world"), "ifmmp xpsme");
    $main->assert_equals($cipher->encrypt("HELLO WORLD"), "IFMMP XPSME");
    $main->assert_equals($cipher->encrypt("Hello World"), "Ifmmp Xpsme");
    $main->assert_equals($cipher->encrypt("lorem ipsum"), "mpsfn jqtvn");
    $main->assert_equals($cipher->encrypt("LOREM IPSUM"), "MPSFN JQTVN");
    $main->assert_equals($cipher->encrypt("Lorem Ipsum"), "Mpsfn Jqtvn");
    $main->assert_equals($cipher->encrypt("abcdefghijklmnopqrstuvwxyz"), "bcdefghijklmnopqrstuvwxyza");
    $main->assert_equals($cipher->encrypt("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), "BCDEFGHIJKLMNOPQRSTUVWXYZA");
    $main->assert_equals($cipher->decrypt("ifmmp xpsme"), "hello world");
    $main->assert_equals($cipher->decrypt("IFMMP XPSME"), "HELLO WORLD");
    $main->assert_equals($cipher->decrypt("Ifmmp Xpsme"), "Hello World");
    $main->assert_equals($cipher->decrypt("mpsfn jqtvn"), "lorem ipsum");
    $main->assert_equals($cipher->decrypt("MPSFN JQTVN"), "LOREM IPSUM");
    $main->assert_equals($cipher->decrypt("Mpsfn Jqtvn"), "Lorem Ipsum");
    $main->assert_equals($cipher->decrypt("bcdefghijklmnopqrstuvwxyza"), "abcdefghijklmnopqrstuvwxyz");
    $main->assert_equals($cipher->decrypt("BCDEFGHIJKLMNOPQRSTUVWXYZA"), "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $cipher = new CaesarCipher(3);
    $main->assert_equals($cipher->encrypt("hello world"), "khoor zruog");
    $main->assert_equals($cipher->encrypt("HELLO WORLD"), "KHOOR ZRUOG");
    $main->assert_equals($cipher->encrypt("Hello World"), "Khoor Zruog");
    $main->assert_equals($cipher->encrypt("lorem ipsum"), "oruhp lsvxp");
    $main->assert_equals($cipher->encrypt("LOREM IPSUM"), "ORUHP LSVXP");
    $main->assert_equals($cipher->encrypt("Lorem Ipsum"), "Oruhp Lsvxp");
    $main->assert_equals($cipher->encrypt("abcdefghijklmnopqrstuvwxyz"), "defghijklmnopqrstuvwxyzabc");
    $main->assert_equals($cipher->encrypt("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), "DEFGHIJKLMNOPQRSTUVWXYZABC");
    $main->assert_equals($cipher->decrypt("khoor zruog"), "hello world");
    $main->assert_equals($cipher->decrypt("KHOOR ZRUOG"), "HELLO WORLD");
    $main->assert_equals($cipher->decrypt("Khoor Zruog"), "Hello World");
    $main->assert_equals($cipher->decrypt("oruhp lsvxp"), "lorem ipsum");
    $main->assert_equals($cipher->decrypt("ORUHP LSVXP"), "LOREM IPSUM");
    $main->assert_equals($cipher->decrypt("Oruhp Lsvxp"), "Lorem Ipsum");
    $main->assert_equals($cipher->decrypt("defghijklmnopqrstuvwxyzabc"), "abcdefghijklmnopqrstuvwxyz");
    $main->assert_equals($cipher->decrypt("DEFGHIJKLMNOPQRSTUVWXYZABC"), "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $cipher = new CaesarCipher(8);
    $main->assert_equals($cipher->encrypt("hello world"), "pmttw ewztl");
    $main->assert_equals($cipher->encrypt("HELLO WORLD"), "PMTTW EWZTL");
    $main->assert_equals($cipher->encrypt("Hello World"), "Pmttw Ewztl");
    $main->assert_equals($cipher->encrypt("lorem ipsum"), "twzmu qxacu");
    $main->assert_equals($cipher->encrypt("LOREM IPSUM"), "TWZMU QXACU");
    $main->assert_equals($cipher->encrypt("Lorem Ipsum"), "Twzmu Qxacu");
    $main->assert_equals($cipher->encrypt("abcdefghijklmnopqrstuvwxyz"), "ijklmnopqrstuvwxyzabcdefgh");
    $main->assert_equals($cipher->encrypt("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), "IJKLMNOPQRSTUVWXYZABCDEFGH");
    $main->assert_equals($cipher->decrypt("pmttw ewztl"), "hello world");
    $main->assert_equals($cipher->decrypt("PMTTW EWZTL"), "HELLO WORLD");
    $main->assert_equals($cipher->decrypt("Pmttw Ewztl"), "Hello World");
    $main->assert_equals($cipher->decrypt("twzmu qxacu"), "lorem ipsum");
    $main->assert_equals($cipher->decrypt("TWZMU QXACU"), "LOREM IPSUM");
    $main->assert_equals($cipher->decrypt("Twzmu Qxacu"), "Lorem Ipsum");
    $main->assert_equals($cipher->decrypt("ijklmnopqrstuvwxyzabcdefgh"), "abcdefghijklmnopqrstuvwxyz");
    $main->assert_equals($cipher->decrypt("IJKLMNOPQRSTUVWXYZABCDEFGH"), "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $cipher = new CaesarCipher(13);
    $main->assert_equals($cipher->encrypt("hello world"), "uryyb jbeyq");
    $main->assert_equals($cipher->encrypt("HELLO WORLD"), "URYYB JBEYQ");
    $main->assert_equals($cipher->encrypt("Hello World"), "Uryyb Jbeyq");
    $main->assert_equals($cipher->encrypt("lorem ipsum"), "yberz vcfhz");
    $main->assert_equals($cipher->encrypt("LOREM IPSUM"), "YBERZ VCFHZ");
    $main->assert_equals($cipher->encrypt("Lorem Ipsum"), "Yberz Vcfhz");
    $main->assert_equals($cipher->encrypt("abcdefghijklmnopqrstuvwxyz"), "nopqrstuvwxyzabcdefghijklm");
    $main->assert_equals($cipher->encrypt("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), "NOPQRSTUVWXYZABCDEFGHIJKLM");
    $main->assert_equals($cipher->decrypt("uryyb jbeyq"), "hello world");
    $main->assert_equals($cipher->decrypt("URYYB JBEYQ"), "HELLO WORLD");
    $main->assert_equals($cipher->decrypt("Uryyb Jbeyq"), "Hello World");
    $main->assert_equals($cipher->decrypt("yberz vcfhz"), "lorem ipsum");
    $main->assert_equals($cipher->decrypt("YBERZ VCFHZ"), "LOREM IPSUM");
    $main->assert_equals($cipher->decrypt("Yberz Vcfhz"), "Lorem Ipsum");
    $main->assert_equals($cipher->decrypt("nopqrstuvwxyzabcdefghijklm"), "abcdefghijklmnopqrstuvwxyz");
    $main->assert_equals($cipher->decrypt("NOPQRSTUVWXYZABCDEFGHIJKLM"), "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $cipher = new CaesarCipher(20);
    $main->assert_equals($cipher->encrypt("hello world"), "byffi qilfx");
    $main->assert_equals($cipher->encrypt("HELLO WORLD"), "BYFFI QILFX");
    $main->assert_equals($cipher->encrypt("Hello World"), "Byffi Qilfx");
    $main->assert_equals($cipher->encrypt("lorem ipsum"), "filyg cjmog");
    $main->assert_equals($cipher->encrypt("LOREM IPSUM"), "FILYG CJMOG");
    $main->assert_equals($cipher->encrypt("Lorem Ipsum"), "Filyg Cjmog");
    $main->assert_equals($cipher->encrypt("abcdefghijklmnopqrstuvwxyz"), "uvwxyzabcdefghijklmnopqrst");
    $main->assert_equals($cipher->encrypt("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), "UVWXYZABCDEFGHIJKLMNOPQRST");
    $main->assert_equals($cipher->decrypt("byffi qilfx"), "hello world");
    $main->assert_equals($cipher->decrypt("BYFFI QILFX"), "HELLO WORLD");
    $main->assert_equals($cipher->decrypt("Byffi Qilfx"), "Hello World");
    $main->assert_equals($cipher->decrypt("filyg cjmog"), "lorem ipsum");
    $main->assert_equals($cipher->decrypt("FILYG CJMOG"), "LOREM IPSUM");
    $main->assert_equals($cipher->decrypt("Filyg Cjmog"), "Lorem Ipsum");
    $main->assert_equals($cipher->decrypt("uvwxyzabcdefghijklmnopqrst"), "abcdefghijklmnopqrstuvwxyz");
    $main->assert_equals($cipher->decrypt("UVWXYZABCDEFGHIJKLMNOPQRST"), "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    $main->print_summary();
    ?>
    <h2>Summary</h2>
    <?php
    $final = new Test;
    $final->expect($init->passes > 0);
    $final->expect($init->fails === 0);
    $final->expect($alphabet->passes > 0);
    $final->expect($alphabet->fails === 0);
    $final->expect($main->passes > 0);
    $final->expect($main->fails === 0);
    $final->print_summary();
    ?>
  </body>
</html>
