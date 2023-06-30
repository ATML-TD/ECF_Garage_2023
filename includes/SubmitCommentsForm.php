<div id="review_modal" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Laissez un commentaire</h5>
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
					<input type="text" name="usermail" id="usermail" class="form-control" placeholder="Entrez votre email" />
				</div>
				<div class="form-group">
					<textarea name="comment" id="comment" class="form-control" placeholder="Ecrivez votre commentaire"></textarea>
				</div>
				<div class="form-group text-center mt-4">
					<button type="button" class="btn btn-primary" id="save_review">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
var rating_data = 0;
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
        console.log(rating_data)
    });

    $('#save_review').click(function(){
        var usermail = $('#usermail').val();
        var comment = $('#comment').val();
        if(usermail == '' || comment == '')
        {
            alert("Veuillez remplir tous les champs");
            return false;
        }
        else
        {
            $.ajax({
                url:"includes/SubmitComments.php",
                method:"POST",
                data:{rating_data:rating_data, usermail:usermail, comment:comment},
                success:function(data)
                {
                    $('#review_modal').modal('hide');
                    alert(data);
                }
            })
        }
    });

</script>

<?php include ("includes/SubmitComments.php");?>


