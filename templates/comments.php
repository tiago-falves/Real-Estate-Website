
<?php  include_once('../session/session.php');  

function draw_comments($comments,$houseId){
    ?>
    <section id="comments">
                
        <h2><?php echo sizeof($comments); ?> comments</h2>
        <div id="commentsPopup" class="overlay">
            <div class="popup">
                <h2>Comments</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <?php foreach($comments as $comment){
                        $commenter = getUserFromId($comment['commenter_id']); ?>
                        <article class="comment">
                            <header><h3><?php echo treatOutput($comment['title']); ?></h3></header>
                            <span class="user"><?php echo treatOutput($commenter['userName']); ?></span>
                            <span class="date"><?php echo $comment['date'] ?></span>
                            <p><?php echo treatOutput($comment['content']) ?></p>
                        </article>
                    <?php } 
            if(isset($_SESSION['username'])){
                addOpinion($houseId);  
            }?>
                </div>
            </div>
        </div>
    </section>
<?php }

function addOpinion($houseId){ ?>

    <form id="addOpinion" method="post" action="../Actions/action_add_comment.php?id=<?php echo $houseId;?>">
        <h2>Add your voice...</h2>
        <!-- <label>Username 
            <input type="text" name="username">
        </label> -->
        <!-- <label>E-mail
            <input type="email" name="email">
        </label> -->
        
        <label>Title
            <input type="text" name="Title">           
        </label>
        <label>Rating
            <select name="Rating" id="rating">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>         
        </label>
        <label>Comment
            <textarea name="comment"></textarea>            
        </label>
        <input type="submit" value="Reply">
    </form>


<?php } ?>