# Generate_Random_String

## Hot to Use

### General
**[GET]** http://hostname.example.co.jp/Generate_Random_String/ 

### Option

The character type that is output can be changed by putting the character specified in the `chr` argument.

i.e. **[GET]** `http://hostname.example.co.jp/Generate_Random_String/?chr=aA1@`

| Char | Description |
|:---- |:----------- |
| a | add the lower alphabet |
| A | add the upper alphabet |
| 1 | add the numeric |
| @ | add the special charactor |

You can change the number of characters by putting a number in the `len` argument

i.e. **[GET]** `http://hostname.example.co.jp/Generate_Random_String/?len=12`

Options `chr` and `len` can be used in combination
