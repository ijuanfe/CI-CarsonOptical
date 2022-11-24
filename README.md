# Carson Optical company: PHP Programming Position

## Motivation
This is a Coding Interview (CI) test for the Carson Optical company to evaluate my problem-solving skills and performance in the PHP programming language.

## What does this algorithm solve
The <i>function1</i> takes a string as input and outputs a string composed of the characters that comes after the very first "GAP" word substring occurrence is found.

## Things that I assumed for this test

As I did not have any interaction with the customer to tackle ambiguity (i.e. asking questions, understanding inputs and outputs, identifying the edge cases) I had to assume the following points:

1. This implementation only accepts string data types as valid inputs. Any other data type is not properly handled/validated and is considered as an invalid input (e.g integers, objects, null).
2. Letter case is taken into account. Hence, any word that is not all in uppercase exactly as "GAP" (e.g. gAP, GaP, GAp, gaP, gAp, Gap, gap) is not taken as a substring occurrence.
3. Any character after the very first "GAP" word substring occurrence is found, including other "GAP" words, will be in the output. This means that if there are multiple "GAP" words only the first occurrence will be taken into account.
4. If there is a "GAP" word as a substring of the input, then there is always one blank space after it.
5. An empty string as input returns an empty string (this is expected as the word "GAP" can never be found in an empty string).

## Required dependencies
The following are the dependencies needed to run this project:
1. PHP version 7.4.33
2. Composer version 2.4.4
3. PHPUnit version 9.5.26 (installed with Composer)

## How to run this project
Run the following commands to test the project:
1. Clone this repository:
```
git clone https://github.com/ijuanfe/CI-CarsonOptical.git
```
2. Under <i>/path/to/CI-CarsonOptical/</i> directory install the dependencies:
```
composer install
```
3. In the same directory, run the PHPUnit Tests:
```
./vendor/bin/phpunit tests
```

## Copyright
2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
