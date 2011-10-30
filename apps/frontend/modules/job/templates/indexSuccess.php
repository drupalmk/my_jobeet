<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>
 
<div id="jobs">
  <table class="jobs">
    <?php foreach ($jobeet_jobs as $i => $job): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="location"><?php echo $job->getLocation() ?></td>
        <td class="position">
          <a href="<?php //echo url_for('job/show?id='.$job->getId()) 
          echo url_for('job_show_user', $job);
          /* 
            OR
            echo url_for(array(
                'module'   => 'job',
                'action'   => 'show',
                'id'       => $job->getId(),
                'company'  => $job->getCompany(),
                'location' => $job->getLocation(),
                'position' => $job->getPosition(),
              ));
          */
          
          /*
           * OR
           * url_for('job/show?id='.$job->getId().'&company='.$job->getCompany().
           *          '&location='.$job->getLocation().'&position='.$job->getPosition())
           * 
           */
          ?>">
           <?php
           /*
            * url_for('@default?module=job&action=show&id='.$job->getId())
            * alternative and faster syntax @default is name of route to use.
            */
           ?>
            <?php echo $job->getPosition() ?>
          </a>
        </td>
        <td class="company"><?php echo $job->getCompany() ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</div>