<section class="csag-main">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="margin-top:9%;">
        <h3 align="center"><b>CSAG Mini Admin Training 2014</b></h3>
        <p class="csag-announce">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กิจกรรมอบรมเชิงปฏิบัติการมินิแอดมินและรับสมาชิกใหม่ปีการศึกษา 2557 จะจัดขึ้นในวันที่ 18-19 ตุลาคม 2557 โดยสามารถสมัครเข้าร่วมกิจกรรมที่นี่ ตั้งแต่วันที่ 15 กันยายน 2557 - 12 ตุลาคม 2557
    สามารถติดตามรายละเอียดเพิ่มเติมได้ที่ <a href="https://www.facebook.com/groups/csagcommunity/" style="color:#f1c40f;">CSAG Community</a></p>
        <div class="col-md-6 col-md-offset-3">
          <a class="btn btn-lg btn-inverse" href="<?= site_url('events/cmat') ?>">Learn more</a>
          <a class="btn btn-lg btn-default btn-csagc" href="https://www.facebook.com/groups/csagcommunity/">CSAG Community</a>
        </div>
      </div>
      <div class="col-md-4" >
        <?php if (!$logged_in): ?>
          <h3 align="center"><b>Registration</b></h3>
          <?= form_open('registrations/create'); ?>
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email" name="email" style="height: 60px;">
                <div class="input-group-addon">@kmitl.ac.th</div>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" style="height: 60px;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" style="height: 60px;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Fullname" name="fullname" style="height: 60px;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Phone" name="phone" style="height: 60px;">
            </div>
            <button type="submit" class="btn btn-danger" style="width:100%;  font-size:200%;">Register</button>
          </form>
        <?php else: ?>
          <h3 align="center"><b>Agenda</b></h3>
          <table id="mini-admin-agenda" class="table table-hover">
            <thead>
              <th>วันที่</th>
              <th>กิจกรรม</th>
            </thead>
            <tbody>
              <tr>
                <td>25 ตุลาคม</td>
                <td>Mini Admin Training วันที่ 1</td>
              </tr>
              <tr>
                <td>26 ตุลาคม</td>
                <td>Mini Admin Training วันที่ 2</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>Mini Admin Exam</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>ประกาศผู้ติดสัมภาษณ์</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>สัมภาษณ์รับสมาชิกใหม่</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>ประกาศผู้ผ่านการเข้าร่วมเป็นสมาชิก</td>
              </tr>
            </tbody>
          </table>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="learn-more-modal" tabindex="-1" role="dialog" aria-labelledby="learn-more-modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="learn-more-modal-title">Learn more</h4>
      </div>
      <div class="modal-body thai" style="padding-left:9%; padding-right:9%;">
        <h4><i class="fa fa-hand-o-right"></i> ขั้นตอนการลงทะเบียน</h4>
        <p>1.น้องสามารถลงทะเบียนได้ผ่านทางหน้าเว็บไซต์ของ csag โดยสมัครที่แถบ Registration</br>
        2.น้องๆกรอกข้อมูลต่างๆ และทำตามขั้นตอนในการรับสมัคร</br>
        3.น้องๆสามารถสมัครกิจกรรมอบรมเชิงปฏิบัติการ Mini admin และ/หรือ กิจกรรมการรับสมัครสมาชิกใหม่</p>
        <hr>
          <h6> <i class="fa fa-user"></i> หากน้องๆได้เป็นสมาชิกของ CSAG สิทธิพิเศษที่น้องๆจะได้รับมีดังนี้ </h6>
        <p>1. เครื่อง Server สำหรับทดลองและพัฒนาระบบคอมพิวเตอร์ต่างๆ</br>
        2. ที่นั่งทำงานส่วนตัว (แอร์ฟรี  เปิด 24 ชม)</br>
        3. Hi-Speed Internet ความเร็วดาวน์โหลดมากกว่า 100 Mbps อัพโหลดมากกว่า 70 Mbps</br>
        4. หนังสือ ไฟล์วิดีโอความรู้ต่างๆ และการอบรมแนะนำโดยพี่ๆ</br>
        5. ได้รับ E-Mail@kmi.tl ของ Live@edu จากทาง Microsoft</br>
        6. มีโอกาสในการได้รับสิทธิ์ดูแลเครื่องเซิฟเวอร์ ของ CSAG </br>
        7. ได้รับการดูแล อบรมในฐานะ Mini Admin </br>
        8. ได้รับการบ่มเพาะใน  Technology ต่างๆที่น้องสนใจ</br>
        9. ถูกปลูกฝังความรู้และแนวคิดของวัฒนธรรมองค์กร พร้อมสำหรับการก้าวไปสู่ผู้นำ trend ของ Technology </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
