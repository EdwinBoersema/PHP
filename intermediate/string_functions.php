<?php 
    # substr() => returns a portion of a string

    // $output = substr('Hello', 1, 3);
    // echo $output;

    # strlen() => returns the length of the string
    
    // $output = strlen('Hello World');
    // echo $output;

    # strpos() => Finds the first occurence of a sub string
    # strrpos() => Finds the last occurence

    // $output = strpos('Hello World', 'or');
    // echo $output;

    # trim() => strips whitespace

    // $text = 'Hello World              ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper() => converts string characters to uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    # ucwords() => capitalises words

    # str_replace() => replaces all occurences of a string with the replacement
    
    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string() => checks if variable is a string

    // $val = '22';
    // $output = is_string($val);
    // echo $output;

    # gzcompress() => compresses a string

    // $loremIpsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis, elit sed accumsan vestibulum, mi ipsum molestie metus, et semper risus turpis et sapien. Pellentesque tincidunt orci quis semper hendrerit. Morbi risus felis, accumsan eu dui ac, lacinia mattis dui. Nunc lacinia diam quis leo pharetra consectetur. Donec tristique ultricies erat a varius. Sed semper dapibus justo laoreet tempus. Nulla sit amet elementum nisi. Duis sit amet dictum justo. Praesent nec feugiat felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur ut ex eget dolor tristique porta. Etiam porta ultrices dolor in pharetra. Curabitur maximus ipsum purus, a pellentesque est viverra sit amet. ';
    // $compressed = gzcompress($loremIpsum);
    // echo $compressed;