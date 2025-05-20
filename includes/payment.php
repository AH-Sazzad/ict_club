<?php


include_once(__DIR__ . '/../config.php');
include_once(__DIR__ . '/../includes/header.php');
include_once(__DIR__ . '/../includes/navbar.php');
?>
<section>
    <div class="payment">
                        <h2>Pay Your Admission Fee</h2>
                        <p>বিকাশে পেমেন্ট করার বিস্তারিত নিয়মাবলী:</p>
                        <hr>
                    </div>
                    <div class="step">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">স্টেপ ১ – ডায়াল  *247# (একটি পার্সোনাল বিকাশ নম্বর থেকে )</li>
                            <li class="list-group-item">স্টেপ ২ – “Send Money” অপশন সিলেক্ট করুন</li>
                            <li class="list-group-item">স্টেপ ৩ – বিকাশ অ্যাকাউন্ট 01776575220 প্রদান করুন।</li>
                            <li class="list-group-item">স্টেপ ৪ –অ্যামাউন্ট দিন (টোকেনমানি, ভর্তি ফি কিংবা টিউশন ফি কি পরিমানে দিতে হবে তা জানতে ফেসবুক ম্যাসেঞ্জার চ্যাটরুমে গিয়ে লিখুন)</li>
                            <li class="list-group-item">স্টেপ ৫ – রেফারেন্স নাম্বার হিসাবে 1 দিন। (কেবল, ভর্তির সময় 1 দিন। পরবর্তীতে রেফারেন্স নং হিসেবে স্টুডেন্ট আইডি দিন)</li>
                            <li class="list-group-item">স্টেপ ৭ – আপনার গোপন পিন নাম্বার দিন।</li>
                        </ul>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                    <input type="text" name="pay-number" class="form-control " placeholder="Your Payment Number" required="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="trx" class="form-control " placeholder="Your TRX ID" required="" >

                  </div>

                    </div>
                    
</section>