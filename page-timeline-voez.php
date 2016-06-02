<?php
/**
 * 时间轴归档 VOEZ
 *
 * @package custom
 */
$this->need('header.php'); ?>

<style>
    .md-timeline {
        margin: 4em auto;
        position: relative;
        max-width: 46em;
        padding: 0;
    }
    @media screen and (max-device-width:480px){
        .md-timeline{
            margin-top: 6em;
        }
    }
    .md-timeline:before {
        background-color: black;
        content: '';
        margin-left: -1px;
        position: absolute;
        top: 0;
        left: 2em;
        width: 2px;
        height: 100%;
    }
    .md-timeline a{
        text-decoration: none;
        color: #000;
    }
    .md-timeline a:hover{
        text-decoration: underline;
    }
    .md-timeline h3, .md-timeline h4{
        margin: 0;
    }
    .md-timeline-event {
        position: relative;
    }
    .md-timeline-event:hover .md-timeline-event-icon {
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        background-color: #a83279;
    }
    .md-timeline-event:hover .md-timeline-event-thumbnail {
        -moz-box-shadow: inset 40em 0 0 0 #a83279;
        -webkit-box-shadow: inset 40em 0 0 0 #a83279;
        box-shadow: inset 40em 0 0 0 #a83279;
    }

    .md-timeline-event-copy {
        padding: 2em;
        position: relative;
        top: -1.875em;
        left: 4em;
        width: 80%;
    }
    .md-timeline-event-copy h3 {
        font-size: 1.75em;
    }
    .md-timeline-event-copy h4 {
        font-size: 1.2em;
        margin-bottom: 1.2em;
    }
    .md-timeline-event-copy strong {
        font-weight: 700;
    }
    .md-timeline-event-copy p:not(.md-timeline-event-thumbnail) {
        padding-bottom: 1.2em;
    }

    .md-timeline-event-icon {
        -moz-transition: -moz-transform 0.2s ease-in;
        -o-transition: -o-transform 0.2s ease-in;
        -webkit-transition: -webkit-transform 0.2s ease-in;
        transition: transform 0.2s ease-in;
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        background-color: black;
        outline: 10px solid white;
        display: block;
        margin: 0.5em 0.5em 0.5em -0.5em;
        position: absolute;
        top: 0;
        left: 2em;
        width: 1em;
        height: 1em;
    }

    .md-timeline-event-thumbnail {
        -moz-transition: box-shadow 0.5s ease-in 0.1s;
        -o-transition: box-shadow 0.5s ease-in 0.1s;
        -webkit-transition: box-shadow 0.5s ease-in;
        -webkit-transition-delay: 0.1s;
        transition: box-shadow 0.5s ease-in 0.1s;
        color: white;
        font-size: 0.75em;
        background-color: black;
        -moz-box-shadow: inset 0 0 0 0em #ef795a;
        -webkit-box-shadow: inset 0 0 0 0em #ef795a;
        box-shadow: inset 0 0 0 0em #ef795a;
        display: inline-block;
        margin-bottom: 1.2em;
        padding: 0.25em 1em 0.2em 1em;
    }

</style>

<!-- Sidebar hamburger button -->
<button class="MD-burger-icon sidebar-toggle">
<span class="MD-burger-layer"></span>
</button>

<ul class="md-timeline">
   <?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->to($archive); ?>
   <?php while($archive->next()):?>
      <li class="md-timeline-event">
        <label class="md-timeline-event-icon"></label>
        <div class="md-timeline-event-copy">
          <p class="md-timeline-event-thumbnail"><?php $archive->date('M j Y'); ?> - <?php $archive->author() ?></p>
          <h3><a href="<?php $archive->permalink() ?>"><?php $archive->title() ?></a></h3>
          <h4><strong>Categorias:</strong> <?php $archive->category(' '); ?> <br /><strong>Tags:</strong> <?php $archive->tags(' ', true, NULL); ?></h4>
          <p><?php $archive->excerpt(100, '...'); ?></p>
        </div>
      </li>
  <?php endwhile; ?>
</ul>

<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>
