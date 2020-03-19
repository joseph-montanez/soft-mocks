<?php

function h($cnt){
    
    return \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'str_repeat', [<<<HERE
123 {$cnt}
HERE
 . \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'chr', [123]), \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'intval', [$cnt])]);}







function n($cnt){
    
    return \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'str_repeat', [<<<'NOW'
123 {$cnt}
NOW
 . \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'chr', [123]), \Badoo\SoftMocks::callFunction(__NAMESPACE__, 'intval', [$cnt])]);}







echo 'end';
