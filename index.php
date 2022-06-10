


<!DOCTYPE HTML>
<html>
<head>

























    <meta charset="utf-8" />
    <title>Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<section class="header">
   <a href="home.html" class="logo">Cairo GRND</a>
   <nav class="navbar">
       <a href="home.html">home</a>
       <a href="about.html">about</a>
       <a href="book.php">Account</a>
       <a href="contactus.html">Contact Us</a>
       <div class="dropdown">
           <a href="menu.html" class="dropbutton">Menu</a>
           <div class="dropdown-content">
               <a href="mainmenu.php" class="butt1">Main Menu</a><br>
               <a href="breakfast.php" class="butt2">BreakFast Menu</a>
               <a href="desserts.php" class="butt1">Desserts Menu</a>
               <a href="beverages.php" class="butt2">Beverages Menu</a>
               <a href="compose.php" class="butt1">Compose a Sandwich</a>
           </div>
       </div>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section ends -->




    <div class="container" id="container">

    	
    	
    			
    				<div class="col-sm-12 text-center" >
    					<h3 id="write" class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button"  name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>




<section class="footer" >

   <div class="box-container">

      <div class="box" >
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="Menu.php"> <i class="fas fa-angle-right"></i> Menu</a>
         <a href="Account.php"> <i class="fas fa-angle-right"></i> Account</a>
      </div>

      <div class="box">
         <h3>Contact Us</h3>
         <a href="https://www.instagram.com/?hl=en"> <i class="fas fa-angle-right"></i> instagram</a>
         <a href="https://www.facebook.com/"> <i class="fas fa-angle-right"></i>Facebook</a>
         <a href="https://twitter.com/?lang=en"> <i class="fas fa-angle-right"></i> Twitter</a>
         <a href="#"> <i class="fas fa-phone"></i> 01234567890 </a>
         <a href="#"> <i class="fas fa-map"></i>  5th Settlement ,Cairo, Egypt, 11841 </a>
      </div>

  
   </div>

   <div class="credit"> created by <span>Eslam Khaled/Hana Alaa/jasmine Hegazy/Julia Magdy/Salma Baligh</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->



<script>
var rating_data = 0;
  
$('#add_review').css('color','black');
$('#add_review').css('background-color','goldenrod');
$('#save_review').css('color','black');
$('#save_review').css('background-color','goldenrod');







    $('#add_review').click(function(){

        $('#review_modal').modal('show');
       

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });
    </script>


<script>
  
load_rating_data();

function load_rating_data()
{
$.ajax({
    url:"submit_rating.php",
    method:"POST",
    data:{action:'load_data'},
    dataType:"JSON",
    success:function(data)
    {
        $('#average_rating').text(data.average_rating);
        $('#total_review').text(data.total_review);

        var count_star = 0;

        $('.main_star').each(function(){
            count_star++;
            if(Math.ceil(data.average_rating) >= count_star)
            {
                $(this).addClass('text-warning');
                $(this).addClass('star-light');
            }
        });

        $('#total_five_star_review').text(data.five_star_review);

        $('#total_four_star_review').text(data.four_star_review);

        $('#total_three_star_review').text(data.three_star_review);

        $('#total_two_star_review').text(data.two_star_review);

        $('#total_one_star_review').text(data.one_star_review);

        $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

        $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

        $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

        $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

        $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

        if(data.review_data.length > 0)
        {
            var html = '';

            for(var count = 0; count < data.review_data.length; count++)
            {
                html += '<div class="row mb-3">';

               
                html += '<div class="col-sm-12">';

                html += '<div class="card">';

                html += '<div class="card-header" style="font-size:25px"><b>'+data.review_data[count].user_name+'</b></div>';

                html += '<div class="card-body" style="font-size:17px">';

                for(var star = 1; star <= 5; star++)
                {
                    var class_name = '';

                    if(data.review_data[count].rating >= star)
                    {
                        class_name = 'text-warning';
                    }
                    else
                    {
                        class_name = 'star-light';
                    }

                    html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                }

                html += '<br />';

                html += data.review_data[count].user_review;

                html += '</div>';

                html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                html += '</div>';

                html += '</div>';

                html += '</div>';
            }

            $('#review_content').html(html);
        }
    }
})
}
</script>

