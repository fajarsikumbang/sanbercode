//NO 1
var word = 'JavaScript'; 
var second = 'is'; 
var third = 'awesome'; 
var fourth = 'and'; 
var fifth = 'I'; 
var sixth = 'love'; 
var seventh = 'it!';

var sentence = word + ' ' + second + ' ' + third + ' ' + fourth + ' ' + fifth + ' ' + sixth + ' ' + seventh;
console.log(sentence);

//NO 2
var sentence = "I am going to be Web Developer";

var exampleFirstWord = sentence[0]; 
var secondWord = sentence[2] + sentence[3]; 
var thirdWord = sentence.substring(5, 10); // "going"
var fourthWord = sentence.substring(11, 13); // "to"
var fifthWord = sentence.substring(14, 16); // "be"
var sixthWord = sentence.substring(17, 20); // "Web"
var seventhWord = sentence.substring(21, 30); // "Developer"

console.log('First Word: ' + exampleFirstWord); 
console.log('Second Word: ' + secondWord); 
console.log('Third Word: ' + thirdWord); 
console.log('Fourth Word: ' + fourthWord); 
console.log('Fifth Word: ' + fifthWord); 
console.log('Sixth Word: ' + sixthWord); 
console.log('Seventh Word: ' + seventhWord);

//NO 3
var sentence3 = 'wow JavaScript is so cool';

var exampleFirstWord3 = sentence3.substring(0, 3); // "wow"
var secondWord3 = sentence3.substring(4, 14); // "JavaScript"
var thirdWord3 = sentence3.substring(15, 17); // "is"
var fourthWord3 = sentence3.substring(18, 20); // "so"
var fifthWord3 = sentence3.substring(21, 25); // "cool"

var firstWordLength = exampleFirstWord3.length; // 3
var secondWordLength = secondWord3.length; // 10
var thirdWordLength = thirdWord3.length; // 2
var fourthWordLength = fourthWord3.length; // 2
var fifthWordLength = fifthWord3.length; // 4

console.log('First Word: ' + exampleFirstWord3 + ', with length: ' + firstWordLength); 
console.log('Second Word: ' + secondWord3 + ', with length: ' + secondWordLength); 
console.log('Third Word: ' + thirdWord3 + ', with length: ' + thirdWordLength); 
console.log('Fourth Word: ' + fourthWord3 + ', with length: ' + fourthWordLength); 
console.log('Fifth Word: ' + fifthWord3 + ', with length: ' + fifthWordLength);