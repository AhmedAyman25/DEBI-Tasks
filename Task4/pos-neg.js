const num1 = 1;
const num2 = -1;

if (num1 > 0 && num2 < 0) {
  console.log(`${num1} is positive and ${num2} is negative`);
} else if (num1 < 0 && num2 > 0) {
  console.log(`${num1} is negative and ${num2} is positive`);
} else if (num1 > 0 && num2 > 0) {
  console.log(`Both numbers are positive`);
} else if (num1 < 0 && num2 < 0) {
  console.log(`Both numbers are negative`);
} else {
  console.log(`one of the numbers is zero`);
}
