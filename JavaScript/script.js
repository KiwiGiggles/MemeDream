$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$('#CreateBtn').click(function() {
    console.log('fis');
    window.location.href = "http://tor.skelamp.se/aleohm-7/w/MemeDream/create.php";
});


var voteBtnID;
var vote;
var voted = false;

$('.vote-btn').on('click',function(event){
    rating = Number($('#rating').prop("value"));
    voteBtnID = $(event.target).attr('id');
    console.log(voteBtnID);

    if(voteBtnID === 'upVoteBtn' && voted === false){
        vote = 'up';
    }
    else if(voteBtnID === 'downVoteBtn' && voted === false){
        vote = 'down';
    }
    else if(voteBtnID === 'upVoteBtn' && voted === true){
        vote = 'up2';
    }
    else if(voteBtnID === 'downVoteBtn' && voted === true){
        vote = 'down2';
    }

    switch(vote){
        case'up':
            $('#rating').val(rating + 1);
            break;
        case'down':
            $('#rating').val(rating - 1);
            break;
        case'up2':
            $('#rating').val(rating + 2);
            break;
        case'down2':
            $('#rating').val(rating - 2);
            break;
    }

    voted = true;
});

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