#include <stdio.h>

int main(int argc, char const *argv[])
{
    float t1, 
          t2, 
          EPS;

    int i, 
        sign = 1;

    t1 = 1.0;

    t2 = 1.0 - 1.0/3.0;

    EPS = 0.000001;

    i = 5;

    while( 4*(t1 > t2 ? t1 - t2 : t2 -t1 ) >= EPS) {

           t1 = t2;

           t2 = (double)t1 + (double)sign * 1.0 / i;

           i += 2;

           sign *= -1;
    } 

    printf("%f\n", 4 * t2);

	return 0;
}
