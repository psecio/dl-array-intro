
## To create a new lesson for import:

### DETAILS.md

The `DETAILS.md` file should contain basic information about the lesson. It should be in a YAML format with the following content:

```
title: <lesson title>
summary: <short lesson summary/tagline>
description: <longer description, can include Markdown>
```

### Content directory

Files in the content directory should be in Markdown format and should be named according to the step order. For example, step one in the lesson should be `step1.php` and so on.

Each of these files should start with the following front-matter:

```
---
title: <Title of the step>
file: <Filename>
objective: <Changes/updates they need to make to pass the step>
---
```

In this case, it assumes that the directory to find the files is `files/` so you only need to include the filename itself (and any additional path to locate it under `files/` required).

### Steps directory

The steps directory should contain the file(s) to show for each step. The names of these files should correspond to the file names provided in the front-matter of the files in the `content/` directory.

These files should be the starting point for the step, not the end result. The tests in the `tests/` directory will evaluate the result of the user input for correctness.

### Tests directory

This directory should contain the files that will be use to test the user input. These files should be named according to the step they correspond to so the `run-tests.sh` file can find them easily. For example, in the case of a PHP environment, this directory could contain PHPUnit tests named `step1Test.php` and `step2Test.php`.

## Run-tests.sh

This file is used by the platform to execute the tests for a given step. It should take in a single parameter for the step number it needs to run the tests for. For example, in a PHP situation with PHPUnit:

```
#!/bin/bash

TEST="$PWD/tests/step${1}Test.php"
./tools/phpunit $TEST
exit $?
```

And the usage is:

```
./run-tests 1
```

to run the tests for Step 1. The result of the output is returned back to the platform (using `exit $?` in this case) to determine the pass/fail status.