// Given an integer n, return a string array answer where:
// answer[i] == "FizzBuzz" if i is divisible by 3 and 5.
// answer[i] == "Fizz" if i is divisible by 3.
// answer[i] == "Buzz" if i is divisible by 5.
// answer[i] == i (as a string) if none of the above conditions are true.

const answer=[];
let num = 3;
for(let i = 1;i<=num;i++){
	if(i%3 === 0 && i%5 === 0 ){
		answer.push('FizzBuzz');
	}
	else if(i%3 === 0){
		answer.push('Fizz');
	}
	else if(i%5 === 0){
		answer.push('Buzz');
	}
	else{
		answer.push(i.toString());
	}	
}
console.log(answer);