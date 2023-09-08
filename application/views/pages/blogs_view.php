<div class="container-fluid pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pet Blog</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Updates </span>from Blog</h1>
        </div>
        <?php if (!isset($_GET["blog_id"])) : ?>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top lazy" data-src="dist/img/blog-1.png" alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title text-truncate">Top 10 Essential Vaccinations for Your Pet's Health</h4>
                            <div class="mb-3">
                                <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Dr. Olivia Thompson</small>
                                <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 14, 2023 - 03:06 PM</small>
                                <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_1"></span></small>
                            </div>
                            <p class="truncate-lines text-justify">
                                Welcome to Pets Health Management, where we prioritize the well-being of your furry friends. Vaccinations play a vital role in safeguarding your pet's health and preventing the spread of diseases. In this blog post, we'll discuss the top 10 essential vaccinations that every pet owner should be aware of.
                            </p>
                            <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Top 10 Essential Vaccinations for Your Pet's Health") ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top lazy" data-src="dist/img/blog-2.png" alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title text-truncate">Common Dietary Mistakes Pet Owners Make and How to Avoid Them</h4>
                            <div class="mb-3">
                                <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Sarah Johnson</small>
                                <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 13, 2023 - 12:15 PM</small>
                                <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_2"></span></small>
                            </div>
                            <p class="truncate-lines text-justify">
                                We all want the best for our furry friends, and a vital aspect of their well-being is a balanced and nutritious diet. However, many pet owners unknowingly make dietary mistakes that can impact their pet's health in the long run. In this blog post, we'll highlight some common dietary mistakes pet owners make and provide tips on how to avoid them.
                            </p>
                            <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Common Dietary Mistakes Pet Owners Make and How to Avoid Them") ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top lazy" data-src="dist/img/blog-3.png" alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title text-truncate">Understanding Common Pet Illnesses and Their Treatments</h4>
                            <div class="mb-3">
                                <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Dr. Michael Anderson</small>
                                <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 12, 2023 - 8:24 AM</small>
                                <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_3"></span></small>
                            </div>
                            <p class="truncate-lines text-justify">
                                As pet owners, it's important to be aware of common illnesses that can affect our furry companions. By understanding these conditions and their treatments, we can take proactive measures to safeguard our pets' health. In this blog post, we'll explore some of the most common pet illnesses and discuss their treatments.
                            </p>
                            <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Understanding Common Pet Illnesses and Their Treatments") ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        <?php else : ?>
            <div class="row pt-5">
                <!-- Blog Body -->
                <?php if ($_GET["blog_id"] == md5("Top 10 Essential Vaccinations for Your Pet's Health")) : ?>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column text-left mb-4">
                            <h1 class="mb-3">Protecting Your Pet: The Top 10 Essential Vaccinations</h1>
                            <div class="mb-2 d-lg-flex">
                                <span class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Dr. Olivia Thompson</span>
                                <span class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 14, 2023 - 03:06 PM</span>
                                <span class="mr-3 d-block"><i class="fa fa-comments text-muted"></i> <span class="comment_count"></span></span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <img class="img-fluid w-100 mb-4 lazy" data-src="dist/img/blog-1.png" alt="Image">
                            <h5>
                                <b>Introduction:</b>
                            </h5>
                            <p class="text-justify">
                                Welcome to Pets Health Management, where we prioritize the well-being of your furry friends. Vaccinations play a vital role in safeguarding your pet's health and preventing the spread of diseases. In this blog post, we'll discuss the top 10 essential vaccinations that every pet owner should be aware of.
                            </p>
                            <ol class="text-justify list-group mb-4">
                                <li class="list-group-item">
                                    <b>Rabies Vaccine:</b>
                                    The rabies vaccine is arguably the most crucial vaccination for your pet. Rabies is a fatal disease that can affect both animals and humans, making it essential for your pet's safety and public health.
                                </li>
                                <li class="list-group-item">
                                    <b>Distemper Vaccine:</b>
                                    The distemper vaccine protects against a highly contagious viral infection that affects dogs and cats. It can cause severe respiratory, gastrointestinal, and neurological symptoms.
                                </li>
                                <li class="list-group-item">
                                    <b>Parvovirus Vaccine:</b>
                                    Parvovirus is a life-threatening disease that primarily affects dogs, especially puppies. Vaccination is crucial to prevent the spread of this highly contagious virus.
                                </li>
                                <li class="list-group-item">
                                    <b>Adenovirus Vaccine:</b>
                                    Adenoviruses can cause respiratory and liver infections in dogs. Vaccination against adenovirus is typically combined with the distemper vaccine as part of a combination shot.
                                </li>
                                <li class="list-group-item">
                                    <b>Parvovirus Vaccine:</b>
                                    Parvovirus is a life-threatening disease that primarily affects dogs, especially puppies. Vaccination is crucial to prevent the spread of this highly contagious virus.
                                </li>
                                <li class="list-group-item">
                                    <b>Calicivirus Vaccine:</b>
                                    Calicivirus is another common respiratory infection in cats. Vaccination against calicivirus is typically combined with the feline viral rhinotracheitis vaccine.
                                </li>
                                <li class="list-group-item">
                                    <b>Feline Leukemia Vaccine:</b>
                                    Feline leukemia is a viral disease that can weaken a cat's immune system and make them susceptible to various infections. Vaccination is recommended, especially for outdoor cats or those in multi-cat households.
                                </li>
                                <li class="list-group-item">
                                    <b>Bordetella Vaccine:</b>
                                    Bordetella bronchiseptica is a bacterium that can cause respiratory infections, commonly known as kennel cough, in dogs. Vaccination is essential, especially if your pet frequently visits boarding facilities or interacts with other dogs.
                                </li>
                                <li class="list-group-item">
                                    <b>Canine Influenza Vaccine:</b>
                                    Canine influenza, or dog flu, is a contagious respiratory disease. Vaccination can help protect your dog from this viral infection.
                                </li>
                                <li class="list-group-item">
                                    <b>Leptospirosis Vaccine:</b>
                                    Leptospirosis is a bacterial infection that can affect both animals and humans. Vaccination is recommended, especially if your pet has access to outdoor environments or bodies of water.
                                </li>
                            </ol>
                            <h5>
                                <b>Conclusion:</b>
                            </h5>
                            <p class="text-justify">
                                Ensuring that your pet receives the necessary vaccinations is crucial for their overall health and well-being. Talk to your veterinarian about creating a vaccination schedule tailored to your pet's needs. Remember, prevention is the key to keeping your pet healthy and happy!
                            </p>
                        </div>
                        <div class="media bg-light mb-5 p-4 p-md-5">
                            <img data-src="dist/img/blog-1-author.png" alt="Image" class="img-fluid mr-4 mt-1 lazy" style="width: 100px;">
                            <div class="media-body">
                                <h5 class="mb-3">Dr. Olivia Thompson</h5>
                                <p class="m-0 text-justify">
                                    Dr. Olivia Thompson is a dedicated veterinarian with over a decade of experience in pet healthcare. She is passionate about promoting pet wellness and providing valuable insights to pet owners.
                                </p>
                            </div>
                        </div>
                        <!-- Comments -->
                        <div class="mb-5">
                            <h3 class="mb-4 comment_count"></h3>
                            <div id="comment_section">
                                <div id="loader" class="text-center">
                                    <img src="dist/img/loading.gif">
                                </div>
                            </div>
                            <a href="javascript:void(0)" id="btn_load_more_comments" class="d-none text-dark" blog_id="<?= $_GET["blog_id"] ?>">Load More Comments. . .</a>
                        </div>
                        <div style="padding: 30px; background: #f6f6f6;">
                            <h3 class="mb-4">Leave a comment</h3>
                            <form id="comment_form">
                                <div class="form-group">
                                    <label for="nacomment_name">Name</label>
                                    <input type="text" id="comment_name" class="form-control" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" required <?= $this->session->userdata("user_name") ? "disabled" : null ?>>
                                </div>
                                <div class="form-group">
                                    <label for="comment_message">Message</label>
                                    <textarea id="comment_message" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="hidden" id="comment_blog_primary_key" value="<?= $_GET["blog_id"] ?>">
                                    <input type="hidden" id="comment_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">

                                    <input type="submit" value="Leave Comment" id="btn_leave_comment" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($_GET["blog_id"] == md5("Common Dietary Mistakes Pet Owners Make and How to Avoid Them")) : ?>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column text-left mb-4">
                            <h1 class="mb-3">Feeding Fido Right: Avoiding Common Dietary Mistakes</h1>
                            <div class="mb-2 d-lg-flex">
                                <span class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Sarah Johnson</span>
                                <span class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 13, 2023 - 12:15 PM</span>
                                <span class="mr-3 d-block"><i class="fa fa-comments text-muted"></i> <span class="comment_count"></span></span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <img class="img-fluid w-100 mb-4 lazy" data-src="dist/img/blog-2.png" alt="Image">
                            <h5>
                                <b>Introduction:</b>
                            </h5>
                            <p class="text-justify">
                                We all want the best for our furry friends, and a vital aspect of their well-being is a balanced and nutritious diet. However, many pet owners unknowingly make dietary mistakes that can impact their pet's health in the long run. In this blog post, we'll highlight some common dietary mistakes pet owners make and provide tips on how to avoid them.
                            </p>
                            <ol class="text-justify list-group mb-4">
                                <li class="list-group-item">
                                    <b>Overfeeding:</b>
                                    One of the most prevalent mistakes pet owners make is overfeeding their pets. Obesity is a significant problem among pets and can lead to various health issues. Follow the feeding guidelines provided by your veterinarian and monitor your pet's weight regularly to ensure you're not overfeeding.
                                </li>
                                <li class="list-group-item">
                                    <b>Inadequate Water Intake:</b>
                                    Water is essential for your pet's overall health and proper bodily functions. Some pet owners inadvertently neglect their pet's hydration needs. Make sure your pet always has access to fresh and clean water throughout the day.
                                </li>
                                <li class="list-group-item">
                                    <b>Feeding Table Scraps:</b>
                                    While it can be tempting to share your food with your pet, feeding them table scraps can be harmful. Human food can contain ingredients that are toxic to animals or cause digestive upset. Stick to a nutritionally balanced pet food diet recommended by your veterinarian.
                                </li>
                                <li class="list-group-item">
                                    <b>Ignoring Individual Dietary Needs:</b>
                                    Each pet is unique, and their dietary requirements can vary based on factors like age, breed, size, and health conditions. Avoid the mistake of assuming all pets have the same dietary needs. Consult with your veterinarian to determine the appropriate diet for your pet based on their specific requirements.
                                </li>
                                <li class="list-group-item">
                                    <b>Inadequate Nutritional Balance:</b>
                                    Another common mistake is feeding an unbalanced diet that lacks essential nutrients. Ensure your pet's diet includes the right proportions of proteins, carbohydrates, fats, vitamins, and minerals. Consider commercial pet foods that meet the Association of American Feed Control Officials (AAFCO) guidelines.
                                </li>
                                <li class="list-group-item">
                                    <b>Inconsistent Feeding Schedule:</b>
                                    Establishing a consistent feeding schedule is crucial for your pet's digestive health and overall routine. Feeding irregularly or at inconsistent times can disrupt their metabolism and lead to digestive issues. Stick to a regular feeding schedule to maintain a healthy routine.
                                </li>
                            </ol>
                            <h5>
                                <b>Conclusion:</b>
                            </h5>
                            <p class="text-justify">
                                By avoiding these common dietary mistakes, you can provide your pet with a balanced and nutritious diet, promoting their overall health and well-being. Remember, consulting with your veterinarian and investing time in understanding your pet's specific dietary needs is the key to keeping them healthy and happy.
                            </p>
                        </div>
                        <div class="media bg-light mb-5 p-4 p-md-5">
                            <img data-src="dist/img/blog-2-author.png" alt="Image" class="img-fluid mr-4 mt-1 lazy" style="width: 100px;">
                            <div class="media-body">
                                <h5 class="mb-3">Sarah Johnson</h5>
                                <p class="m-0 text-justify">
                                    Sarah Johnson is a passionate pet lover and an advocate for proper pet nutrition. She believes that a healthy diet is the foundation of a pet's well-being and aims to educate pet owners about making informed dietary choices.
                                </p>
                            </div>
                        </div>
                        <!-- Comments -->
                        <div class="mb-5">
                            <h3 class="mb-4 comment_count"></h3>
                            <div id="comment_section">
                                <div id="loader" class="text-center">
                                    <img src="dist/img/loading.gif">
                                </div>
                            </div>
                            <a href="javascript:void(0)" id="btn_load_more_comments" class="d-none text-dark" blog_id="<?= $_GET["blog_id"] ?>">Load More Comments. . .</a>
                        </div>
                        <div style="padding: 30px; background: #f6f6f6;">
                            <h3 class="mb-4">Leave a comment</h3>
                            <form id="comment_form">
                                <div class="form-group">
                                    <label for="nacomment_name">Name</label>
                                    <input type="text" id="comment_name" class="form-control" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" required <?= $this->session->userdata("user_name") ? "disabled" : null ?>>
                                </div>
                                <div class="form-group">
                                    <label for="comment_message">Message</label>
                                    <textarea id="comment_message" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="hidden" id="comment_blog_primary_key" value="<?= $_GET["blog_id"] ?>">
                                    <input type="hidden" id="comment_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">

                                    <input type="submit" value="Leave Comment" id="btn_leave_comment" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($_GET["blog_id"] == md5("Understanding Common Pet Illnesses and Their Treatments")) : ?>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column text-left mb-4">
                            <h1 class="mb-3">Ailments A to Z: Understanding Common Pet Illnesses and Treatments</h1>
                            <div class="mb-2 d-lg-flex">
                                <span class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Dr. Michael Anderson</span>
                                <span class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 12, 2023 - 8:24 AM</span>
                                <span class="mr-3 d-block"><i class="fa fa-comments text-muted"></i> <span class="comment_count"></span></span>
                            </div>
                        </div>
                        <div class="mb-5">
                            <img class="img-fluid w-100 mb-4 lazy" data-src="dist/img/blog-3.png" alt="Image">
                            <h5>
                                <b>Introduction:</b>
                            </h5>
                            <p class="text-justify">
                                As pet owners, it's important to be aware of common illnesses that can affect our furry companions. By understanding these conditions and their treatments, we can take proactive measures to safeguard our pets' health. In this blog post, we'll explore some of the most common pet illnesses and discuss their treatments.
                            </p>
                            <ol class="text-justify list-group mb-4">
                                <li class="list-group-item">
                                    <b>Ear Infections:</b>
                                    Ear infections are prevalent among dogs, particularly those with long, floppy ears. Symptoms include itching, redness, discharge, and odor. Treatment involves thorough cleaning, medication, and addressing any underlying causes.
                                </li>
                                <li class="list-group-item">
                                    <b>Urinary Tract Infections (UTIs):</b>
                                    UTIs are common in both dogs and cats and can cause discomfort and urinary issues. Symptoms include frequent urination, accidents, and blood in urine. Veterinary diagnosis and treatment with antibiotics are necessary to resolve UTIs.
                                </li>
                                <li class="list-group-item">
                                    <b>Dental Disease:</b>
                                    Poor dental hygiene can lead to various oral health issues in pets, including tartar buildup, gum disease, and tooth loss. Regular dental care, such as brushing and professional cleanings, is crucial. In severe cases, extractions may be required.
                                </li>
                                <li class="list-group-item">
                                    <b>Allergies:</b>
                                    Pets can develop allergies to environmental factors, certain foods, or substances they come into contact with. Common signs include itching, redness, sneezing, and gastrointestinal issues. Treatments may include dietary changes, medication, or allergy shots.
                                </li>
                                <li class="list-group-item">
                                    <b>Arthritis:</b>
                                    Arthritis is a degenerative joint disease that affects both dogs and cats, especially as they age. Symptoms include stiffness, limping, decreased mobility, and pain. Treatment may involve medications, weight management, physical therapy, and joint supplements.
                                </li>
                                <li class="list-group-item">
                                    <b>Diabetes:</b>
                                    Diabetes is a metabolic disorder that can occur in pets. Symptoms include increased thirst, excessive urination, weight loss, and fatigue. Treatment typically involves insulin injections, dietary changes, and close monitoring of blood sugar levels.
                                </li>
                                <li class="list-group-item">
                                    <b>Skin Infections:</b>
                                    Pets can develop bacterial or fungal skin infections due to various factors such as allergies, parasites, or poor grooming. Treatment involves identifying the underlying cause, topical or oral medications, and proper hygiene practices.
                                </li>
                            </ol>
                            <h5>
                                <b>Conclusion:</b>
                            </h5>
                            <p class="text-justify">
                                Being aware of common pet illnesses and their treatments empowers pet owners to detect signs early and seek timely veterinary care. Remember, if you suspect your pet may be ill, consult with your veterinarian for an accurate diagnosis and appropriate treatment plan.
                            </p>
                        </div>
                        <div class="media bg-light mb-5 p-4 p-md-5">
                            <img data-src="dist/img/blog-3-author.png" alt="Image" class="img-fluid mr-4 mt-1 lazy" style="width: 100px;">
                            <div class="media-body">
                                <h5 class="mb-3">Dr. Michael Anderson</h5>
                                <p class="m-0 text-justify">
                                    Dr. Michael Anderson is a dedicated veterinarian with a specialization in internal medicine. With years of experience in diagnosing and treating various pet illnesses, he strives to provide accurate and practical information to pet owners.
                                </p>
                            </div>
                        </div>
                        <!-- Comments -->
                        <div class="mb-5">
                            <h3 class="mb-4 comment_count"></h3>
                            <div id="comment_section">
                                <div id="loader" class="text-center">
                                    <img src="dist/img/loading.gif">
                                </div>
                            </div>
                            <a href="javascript:void(0)" id="btn_load_more_comments" class="d-none text-dark" blog_id="<?= $_GET["blog_id"] ?>">Load More Comments. . .</a>
                        </div>
                        <div style="padding: 30px; background: #f6f6f6;">
                            <h3 class="mb-4">Leave a comment</h3>
                            <form id="comment_form">
                                <div class="form-group">
                                    <label for="nacomment_name">Name</label>
                                    <input type="text" id="comment_name" class="form-control" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" required <?= $this->session->userdata("user_name") ? "disabled" : null ?>>
                                </div>
                                <div class="form-group">
                                    <label for="comment_message">Message</label>
                                    <textarea id="comment_message" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="hidden" id="comment_blog_primary_key" value="<?= $_GET["blog_id"] ?>">
                                    <input type="hidden" id="comment_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">

                                    <input type="submit" value="Leave Comment" id="btn_leave_comment" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif ?>
                <!-- Recent Posts -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="mb-5">
                        <h3 class="mb-4">Recent Post</h3>
                        <?php if ($_GET["blog_id"] != md5("Top 10 Essential Vaccinations for Your Pet's Health")) : ?>
                            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid lazy" data-src="dist/img/blog-1.png" style="width: 150px; height: 150px;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    <a class="text-dark mb-2" href="blogs?blog_id=<?= md5("Top 10 Essential Vaccinations for Your Pet's Health") ?>">
                                        Top 10 Essential Vaccinations for Your Pet's Health
                                    </a>
                                    <div class="">
                                        <small class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Dr. Olivia Thompson</small>
                                        <small class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 14, 2023 - 03:06 PM</small>
                                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_1"></span></small>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if ($_GET["blog_id"] != md5("Common Dietary Mistakes Pet Owners Make and How to Avoid Them")) : ?>
                            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid lazy" data-src="dist/img/blog-2.png" style="width: 150px; height: 150px;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    <a class="text-dark mb-2" href="blogs?blog_id=<?= md5("Common Dietary Mistakes Pet Owners Make and How to Avoid Them") ?>">
                                        Common Dietary Mistakes Pet Owners Make and How to Avoid Them
                                    </a>
                                    <div class="">
                                        <small class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Sarah Johnson</small>
                                        <small class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 13, 2023 - 12:15 PM</small>
                                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_2"></span></small>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if ($_GET["blog_id"] != md5("Understanding Common Pet Illnesses and Their Treatments")) : ?>
                            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid lazy" data-src="dist/img/blog-3.png" style="width: 150px; height: 150px;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    <a class="text-dark mb-2" href="blogs?blog_id=<?= md5("Understanding Common Pet Illnesses and Their Treatments") ?>">
                                        Understanding Common Pet Illnesses and Their Treatments
                                    </a>
                                    <div class="">
                                        <small class="mr-3 d-block"><i class="fa fa-user text-muted"></i> Dr. Michael Anderson</small>
                                        <small class="mr-3 d-block"><i class="fa fa-clock text-muted"></i> July 12, 2023 - 8:24 AM</small>
                                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_3"></span></small>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>