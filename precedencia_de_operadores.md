| Asociatividad	| Operadores | Información adicional |
| -- | -- | -- |
| no asociativo | clone new                                                 | clone and new                 |   
| izquierda	    | [                                                         | array()                       |
| derecha	    | **	                                                    | aritmética                    |
| derecha	    | ++ -- ~ (int) (float) (string) (array) (object) (bool) @  | tipos e incremento/decremento |
| no asociativo	| instanceof                                                | tipos                         |
| derecha	    | !	                                                        | lógico                        |
| izquierda	    | * / %                                                     | aritmética                    |
| izquierda	    | + - .                                                     | aritmética y string           |
| izquierda	    | << >>                                                     | bit a bit                     |
| no asociativo	| < <= > >=                                                 | comparación                   |
| no asociativo	| == != === !== <> <=>                                      | comparación                   |
| izquierda	    | &	                                                        | bit a bit y referencias       |
| izquierda	    | ^	                                                        | bit a bit                     |
| izquierda	    | *pipe*	                                                | bit a bit                     |
| izquierda	    | &&                                                        | lógico                        |
| izquierda	    | *Pipe* *Pipe*	                                            | lógico                        |
| derecha	    | ??                                                        | comparación                   |
| izquierda	    | ? :                                                       | ternario                      |
| derecha	    | = += -= *= **= /= .= %= &= ^= <<= >>=	                    | asignación                    |
| izquierda	    | and                                                       | lógico                        |
| izquierda	    | xor	                                                    | lógico                        |
| izquierda	    | or                                                        | lógico                        |
| Ejemplo       | #1                                                        | Asociatividad                 |