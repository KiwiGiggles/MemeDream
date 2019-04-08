$('#CreateBtn').click(function() {
    console.log('fis');
    window.location.href = "http://tor.skelamp.se/aleohm-7/w/MemeDream/create.php";
});


var upVote;
var downVote;

// var voteBtnID;
// var rating;
// var upVoted = false;
// var downVoted = false;

// $('.vote-btn').on('click',function(event){
//     rating = Number($('#rating').prop("value"));
//     voteBtnID = $(event.target).attr('id');
//     console.log(voteBtnID);

//     if(voteBtnID === 'upVoteBtn' && upVoted === false && downVoted === false){
//         console.log(rating);
//         $('#rating').val(rating + 1);
//     }
//     else if(voteBtnID === 'upVoteBtn' && downVoted === true){
//         $('#rating').val(rating + 2);
//     }
//     else if(voteBtnID === 'upVoteBtn' && upVoted == true){
        
//     }
//     else if(voteBtnID === 'downVoteBtn' && upVoted === false && downVoted === false){
//         $('#rating').val(rating - 1);
//     }
//     else if(voteBtnID === 'downVoteBtn' && upVoted === true){
//         $('#rating').val(rating - 2);
//     }
//     else if(voteBtnID === 'downVoteBtn' && downVoted == true){
        
//     }
// });

// document.addEventListener('DOMContentLoaded', function () {
//     $('.vote-btn').on('click', '[data-fa-i2svg]', function (event) {
//         voteBtnID = $(event.target).parents("button:first").attr('id');
//         console.log(voteBtnID);
        
//     if(voteBtnID === 'upVoteBtn' && upVoted === false && downVoted === false){
//         $('#rating').val(rating + 1);
//     }
//     else if(voteBtnID === 'upVoteBtn' && downVoted === true){
//         $('#rating').val(rating + 2);
//     }
//     else if(voteBtnID === 'upVoteBtn' && upVoted == true){
        
//     }
//     else if(voteBtnID === 'downVoteBtn' && upVoted === false && downVoted === false){
//         $('#rating').val(rating - 1);
//     }
//     else if(voteBtnID === 'downVoteBtn' && upVoted === true){
//         $('#rating').val(rating - 2);
//     }
//     else if(voteBtnID === 'downVoteBtn' && downVoted == true){
        
//     }
//     });
// });