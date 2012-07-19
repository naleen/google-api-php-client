<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * This file has been modified by Mashery, Inc.
 * 
 * Note that the original work's copyright and license information is located at
 * the top of this file. Any modifications made by Mashery, Inc. are licensed
 * under the following license.
 * 
 * Copyright (c) 2012 Mashery, Inc. 
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:

 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *  
 * @author Neil Mansilla <neil@mashery.com>
 */

global $apiConfig;
$apiConfig = array(
    // True if objects should be returned by the service classes.
    // False if associative arrays should be returned (default behavior).
    'use_objects' => true,
  
    // The application_name is included in the User-Agent HTTP header.
    'application_name' => 'mashery-io-wraps',

    // The developer key, you get this at https://code.google.com/apis/console
    'developer_key' => '',
    'developer_secret' => '',

    // Name of the signature parameter sent to the query string
    // Note: used only when developer_secret is set.
    'signature_name' => 'sig',

    // Signature hashing algorithm ('md5', 'sha256', etc.)
    'signature_type' => 'md5',

    // Name of the API key parameter sent to the query string
    'key_name' => 'apikey',

    // Which Authentication, Storage and HTTP IO classes to use.
    'authClass'    => 'apiAuthNone',
    'ioClass'      => 'apiCurlIO',
    'cacheClass'   => 'apiFileCache',

    // URL where API requests are sent (https also supported)
    'basePath' => 'http://api.yourdomain.com',

    // IO Class dependent configuration, you only have to configure the values for the class that was configured as the ioClass above
    'ioFileCache_directory'  =>
        (function_exists('sys_get_temp_dir') ?
            sys_get_temp_dir() . '/apiClient' :
        '/tmp/apiClient'),
    'ioMemCacheStorage_host' => '127.0.0.1',
    'ioMemcacheStorage_port' => '11211'
);
