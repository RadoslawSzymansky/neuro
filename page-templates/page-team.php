<?php get_header(); // Template Name: Zespół ?>

<header class="header mb">
  <img src="<?php echo get_field('header_img')['url']; ?>" alt="<?php echo get_field('header_img')['alt']; ?>" class="header__img">
  <div class="content">
    <div class="container">
      <div class="label"><?php the_field('header_label'); ?></div>
      <h1 class="title"><?php the_field('header_title'); ?></h1>
    </div>
  </div>
</header>

<div class="container">

  <div class="text-section">
    <div class="label"><?php the_field('text_label'); ?></div>
    <?php the_field('text-section'); ?>
  </div>

</div>

<?php
    $teams = get_field("teams");
    $firstRow = array_slice($teams, 0, 4);
    $secondRow = array_slice($teams, 4, 4);
  ?>

  <div class="container">
    <div class="teams">

      <!-- first row -->
      <div class="teams__row">
        <?php
          foreach($firstRow as $key => $teamMember) { ?>

          <!-- single small teamMember -->
          <div class="teamMember" data-id="first-row-teamMember-<?php echo $key; ?>" style="background-image: url('<?php echo $teamMember['thumbnail']['url']; ?>');">
            <div class="content">
              <h5><?php echo $teamMember['name']; ?></h5>
              <div class="status"><?php echo $teamMember['stanowisko']; ?></div>
              <div class="folding">
                <span class="show"><?php pll_e('Rozwiń'); ?></span>
                <span class="hide"><?php pll_e('Zwiń'); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10.688" height="4.745" viewBox="0 0 10.688 4.745">
                  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M3771.033,566.423a.669.669,0,0,1-.4-.129l-4.669-3.4a.674.674,0,0,1-.149-.942.675.675,0,0,1,.942-.149l4.273,3.108,4.273-3.108a.67.67,0,0,1,.4-.129.677.677,0,0,1,.546.278.674.674,0,0,1-.149.942l-4.669,3.4A.67.67,0,0,1,3771.033,566.423Z" transform="translate(-3765.689 -561.679)" fill="#182841"/>
                </svg>
              </div>
            </div>
          </div>

          <!-- single content -->
          <div class="teamMember-content" data-id="first-row-teamMember-<?php echo $key; ?>">
              <div class="teamMember-content__data">
                <?php $data = $teamMember['data']; ?>
                <?php
                foreach($data as $key => $dataItem) { ?>
                  <div>
                    <div class="item">
                      <div class="left"><?php echo $dataItem['name']; ?></div>
                      <div class="right"><?php echo $dataItem['Desc']; ?></div>
                    </div>
                  </div>
                <?php } ?>
              </div>
              <div class="close">
                <?php pll_e('Zwiń'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="10.688" height="4.745" viewBox="0 0 10.688 4.745">
                  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M3771.033,566.423a.669.669,0,0,1-.4-.129l-4.669-3.4a.674.674,0,0,1-.149-.942.675.675,0,0,1,.942-.149l4.273,3.108,4.273-3.108a.67.67,0,0,1,.4-.129.677.677,0,0,1,.546.278.674.674,0,0,1-.149.942l-4.669,3.4A.67.67,0,0,1,3771.033,566.423Z" transform="translate(-3765.689 -561.679)" fill="#182841"/>
                </svg>
              </div>
          </div>

          <?php }
        ?>
      </div>

        <!-- first row -->
        <div class="teams__row">
        <?php
          foreach($secondRow as $key => $teamMember) { ?>

          <!-- single small teamMember -->
          <div class="teamMember" data-id="second-row-teamMember-<?php echo $key; ?>" style="background-image: url('<?php echo $teamMember['thumbnail']['url']; ?>');">
            <div class="content">
              <h5><?php echo $teamMember['name']; ?></h5>
              <div class="status"><?php echo $teamMember['stanowisko']; ?></div>
              <div class="folding">
                <span class="show"><?php pll_e('Rozwiń'); ?></span>
                <span class="hide"><?php pll_e('Zwiń'); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10.688" height="4.745" viewBox="0 0 10.688 4.745">
                  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M3771.033,566.423a.669.669,0,0,1-.4-.129l-4.669-3.4a.674.674,0,0,1-.149-.942.675.675,0,0,1,.942-.149l4.273,3.108,4.273-3.108a.67.67,0,0,1,.4-.129.677.677,0,0,1,.546.278.674.674,0,0,1-.149.942l-4.669,3.4A.67.67,0,0,1,3771.033,566.423Z" transform="translate(-3765.689 -561.679)" fill="#182841"/>
                </svg>
              </div>
            </div>
          </div>

          <!-- single content -->
          <div class="teamMember-content" data-id="second-row-teamMember-<?php echo $key; ?>">
            <div class="teamMember-content__data">
                <?php $data = $teamMember['data']; ?>
                <?php
                foreach($data as $key => $dataItem) { ?>
                  <div>
                    <div class="item">
                      <div class="left"><?php echo $dataItem['name']; ?></div>
                      <div class="right"><?php echo $dataItem['Desc']; ?></div>
                    </div>
                  </div>
                <?php } ?>
              </div>
              <div class="close">
                <?php pll_e('Zwiń'); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="10.688" height="4.745" viewBox="0 0 10.688 4.745">
                  <path id="Path_216_-_Outline" data-name="Path 216 - Outline" d="M3771.033,566.423a.669.669,0,0,1-.4-.129l-4.669-3.4a.674.674,0,0,1-.149-.942.675.675,0,0,1,.942-.149l4.273,3.108,4.273-3.108a.67.67,0,0,1,.4-.129.677.677,0,0,1,.546.278.674.674,0,0,1-.149.942l-4.669,3.4A.67.67,0,0,1,3771.033,566.423Z" transform="translate(-3765.689 -561.679)" fill="#182841"/>
                </svg>
              </div>
          </div>

          <?php }
        ?>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
