# php-rest-api

A very simple framework for developing a REST API using PHP

## Usage

### Basic Use

Extend the ControllerAbstract class and populate it with your own methods.

Within your controller, preform all your logic, then send the response using `$this->response->send(array(/* Your response body */))`

### Errors

The Response class also makes it easy to display error messages to your users with `$this->response->setError()`  The response (when you send it `$response->send()`) will then contain an 'err' object with your error code, error message, and details about the error.

### Customizing the Response

The Response class takes care of everything else for you (setting content-type, etc.), allowing you to focus on the logic behind your API.

Of course, all of this can be changed using the methods in the Response class.

You do not need to use the ControllerAbstract class, but it provides some extra helper methods for developing a REST API.

# License

(The MIT License)

Copyright (c) 2012 Patrick McCoy

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.