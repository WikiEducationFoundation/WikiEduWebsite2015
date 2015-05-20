<div class="row">
   <div class="col-sm-8">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <div class="page-content row">
         <div class="col-sm-6 col-sm-push-1">
            <?php get_template_part('templates/content', 'page'); ?>

            <ul class="bios list-unstyled">

              <li class="bio row">
                <div class="bio-image col-xs-3">
                  <figure></figure>
                </div>
                <div class="bio-content col-xs-5">
                  <h3 class="bio-content__name">
                    Frank Schulenburg
                  </h3>
                  <h4 class="bio-content__title">
                    Executive Director
                  </h4>
                  <p class="bio-content__description">
                    Frank is leading the development of Wiki Ed into a mature organization capable of delivering on its long term vision. He is responsible for the overall performance of Wiki Ed and acts as the interface between the board and staff of the organization.
                  </p>
                </div>
              </li>

              <li class="bio row">
                <div class="bio-image col-xs-3">
                  <figure></figure>
                </div>
                <div class="bio-content col-xs-5">
                  <h3 class="bio-content__name">
                    LiAnna Davis
                  </h3>
                  <h4 class="bio-content__title">
                    Director of Programs
                  </h4>
                  <p class="bio-content__description">
                   As Director of Programs, LiAnna is responsible for all of the Wiki Education Foundation’s programmatic activities. She oversees program administration, program planning, staffing, development, budgeting, communications and evaluation.
                  </p>
                </div>
              </li>

            </ul>
         </div>
        </div>

      <?php endwhile; ?>
   </div>
</div>