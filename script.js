const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

document.getElementById('signUpButton').addEventListener('click', function() {
    document.getElementById('signup').style.display = 'block';
    document.getElementById('signIn').style.display = 'none';
});

document.getElementById('signInButton').addEventListener('click', function() {
    document.getElementById('signIn').style.display = 'block';
    document.getElementById('signup').style.display = 'none';
});


// navbaar js

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
