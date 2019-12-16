#include <iostream>
 
using namespace std;
 
struct element
{
   int num;
   element *next;
};
int main()
{
    int n, m;
    cin >> n;
    element *beg1, *beg2, *help1, *help2, *last1, *last2;
    for(int i = 0; i < n; i++){
        if(i == 0){
            beg1 = new element;
            help1 = beg1;
            last1 = beg1;
        }else{
            help1->next = new element;
            help1 = help1->next;
            last1 = help1;
        }
        cin >> help1->num;
    }
 
    cin >> m;
    for(int i = 0; i < m; i++){
        if(i == 0){
            beg2 = new element;
            help2 = beg2;
            last2 = beg2;
        }else{
            help2->next = new element;
            help2 = help2->next;
            last2 = help2;
        }
        cin >> help2->num;
    }
    last1->next = beg2;
    last1 = last2;
    help1 = beg1;
    while(help1 != last1){
        cout << help1->num <<" ";
        help1 = help1->next;
    }
    cout << help1->num << endl;
    return 0;
}
