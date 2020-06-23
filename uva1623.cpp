#include<bits/stdc++.h>
using namespace std;
const int n = 1e6+5;
int rain[n];
int lake[n];
int ans[n];
int no_rain[n];
int find(int x){
	if(no_rain[x] == x)return x;
	return no_rain[x] = find(no_rain[x]);
}
int main(){

	int test ;
	cin >>test;
	while (test -- ){
		
		int lakeCT, day;
		cin >> lakeCT >> day;
		for(int i = 1  ; i <= day ; i ++) {

			cin >> rain[ i ];
			ans[i] = 0;
		}
		for(int i = 1  ; i <= lakeCT ; i ++)
			lake[i] = 0;
		
		no_rain[day + 1 ] = day + 1;
		for(int i = day ; i > 0 ; i -- ){

			if(rain[i] == 0){
				no_rain[i] = i;
			}
			else{
				no_rain[i] = no_rain[i+1];
			}
		}
		no_rain[0] = no_rain[1];
		bool t = true;
		for(int i = 1 ; i <= day ; i ++ ){

			if(rain[i] == 0)continue;

			int x = find( lake[ rain[ i ] ] );
			if(x <= i){
				
				ans[x] = rain[i];
				no_rain[x] = find(x+1);
			}
			else{
				t = false;
				break;
			}
			lake[rain[i]] = i;
		}
		if(t){
			cout << "Yes" <<endl;
			for(int i = 1  ; i <= day ; i ++ ){
				if(rain[i] == 0)printf("%d ", ans[i]);
			}
			puts("");
		}
		else{
			cout << "No" <<endl;
		}
	}
	

}