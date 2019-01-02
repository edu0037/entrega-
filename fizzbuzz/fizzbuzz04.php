  // Another bit-mask in C
  // Gary 

  #include <stdio.h>
  #include <stdlib.h>

  int main()
  {
  int i=0;
  printf("FizzBuzz!\n----------------\n");
  for(i=1; i<=100; ++i)
  {
  int flag = (i%3==0) | (i%5==0)<<1;

  if (flag==0 )
    printf("%d", i);
  if (flag & 1)
    printf( "Fizz");
  if (flag & 2)
    printf( "Buzz");

  putchar('\n');
  }

  return 0;
  }