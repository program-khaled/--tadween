 <!--start catagories -->
 <div class="categories">
                        <h4>التصنيفات</h4>
                        <ul>
                            <?php 
                             $sql="SELECT * FROM categories ";
                             $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                     while($row = mysqli_fetch_assoc($result)) {

                          echo "<li><a href=''><span><i class='fas fa-tags'></i></span>".$row["category_name"]."</a></li>";
                       }
                    } 
                       ?>
                        </ul>
                    </div>
                    <!-- end catagories -->
                    <!-- إعلانات -->
                     <div class="creater" id="slider" style="">
                      
                     </div>
                    