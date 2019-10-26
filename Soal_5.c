#include <stdio.h>
#include <limits.h>

int main(void) 
{
    int A[8]={10, 2, 11, 20, 3, 5};
    int i,min_i, profit_i, best_profit=0,n=8;

    min_i=A[0];
    for(i=1;i<n;i++)
    {
        profit_i = A[i] - min_i;
        best_profit = (profit_i > best_profit) ? profit_i : best_profit;
        
        if(A[i]<min_i)
        {
            min_i=A[i];
        }

    }

    if(best_profit > 0) {
        printf("Profit: %d", best_profit);
    }else{
        printf("Tidak bisa mendapatkan profit pada hari-hari ini");
    }
    return 0;
}