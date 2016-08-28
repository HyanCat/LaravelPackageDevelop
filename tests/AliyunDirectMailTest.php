<?php

/**
 * This file is part of LaravelPackageDemo.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
class AliyunDirectMailTest extends TestCase
{
    public function testSingle()
    {
        Mail::send('welcome', ['hello' => 'world'], function (\Illuminate\Mail\Message $message) {
            $message->subject('Hello Laravel.')->to('hyancat@live.cn');
        });
    }

    public function testBatch()
    {

    }
}