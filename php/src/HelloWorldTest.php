<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/hello-world/HelloWorldTest.php

namespace App;

test('hello world')->expect(HelloWorld::handle())->toBe('Hello, World!');
