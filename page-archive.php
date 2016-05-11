<?php
/**
 * 时间线归档
 *
 * @package custom
 */
 $this->need('header.php'); ?>
 <!-- Sidebar hamburger button -->
 <button class="MD-burger-icon sidebar-toggle">
   <span class="MD-burger-layer"></span>
 </button>

   <section id="md-timeline" class="md-container">
       <?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->to($archive); ?>
       <?php while($archive->next()):?>
           <div class="md-timeline-block">
               <div class="md-timeline-date blue">
                   <div class="md-date">
                       <?php $archive->date('M j'); ?><br />
                       <?php $archive->date('Y'); ?>
                   </div>
               </div>

               <div class="md-timeline-content">
                   <div class="md-timeline-title"><a href="<?php $archive->permalink() ?>"><?php $archive->title() ?></a></div>
                   <div class="md-timeline-info">
                       <span class="md-timeline-info-span">Tags: <?php $archive->tags(' ', true, NULL); ?></span>
                       <span class="md-timeline-info-span">Categorias: <?php $archive->category(' '); ?></span>
                   </div>
                   <p class="md-timeline-excerpt"><?php $archive->excerpt(100, '...'); ?></p>
               </div>
           </div>
       <?php endwhile; ?>
   </section>

   <?php include('sidebar.php'); ?>
   <?php include('footer.php'); ?>
