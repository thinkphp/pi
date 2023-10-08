# PI

## Computes the value of PI using infinite series Taylor - Leibniz 

4*(1- 1/3 + 1/5 - 1/7 + 1/9 +...)

## Monte Carlo

```python
    for i in range(interval**2):

        x = random.uniform(-1,1)
        y = random.uniform(-1,1)

        dist = x**2+ y**2

        if dist <= 1:
            circle_points+=1

        square_points+=1

        pi = 4 * circle_points / square_points


```

Examples

* https://repl.it/@emilstates/PI ( C language)
* https://ideone.com/lBMREH ( C language ) 
* https://ideone.com/lzQO2g ( Kotlin language)
* https://onlinegdb.com/91fi_UBtv (Python3)
* https://onlinegdb.com/6LoH4iYJxM (c language )
