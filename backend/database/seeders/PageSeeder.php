<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'page_title' => 'Our Company',
                'banner' => 'about-banner.jpg',
                'banner_text' => 'Our Company',
                'description' => '<div class="about_desc">
                <div class="container">
                <div class="row justify-content-center ">
                <div class="col-lg-12 col-md-10">
                <div class="section_title text-center">
                <h4>Safari Stan&rsquo;s Pet Center&trade; is a local pet store that has been operating since 2013 in New Haven, CT. With a state of the art location providing you and your family with a fun hands on approach to learning about pets and their required needs.</h4>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="next_puppies">
                <div class="container">
                <div class="row justify-content-center mx-lg-5">
                <div class="col-lg-8 col-md-6 pr-lg-0">
                <div class="next-puppies-bg"><img src="img/next-puppy.jpg" alt="" /></div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                <div class="view-puppies grayish-blue-bg">
                <div class="section_title text-center">
                <h3 class="text-white">Looking for<br />your next puppy?</h3>
                </div>
                <a class="boxed-btn5" href="#">View Our Puppies</a></div>
                </div>
                </div>
                </div>
                </div>
                <div class="great-reputation">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>Great Reputation</h3>
                <p class="text-black">We have built our reputation helping thousands of families adopt new pets into their homes. We are committed to making your new relationship with your pet the best that it can be:</p>
                </div>
                <div>
                <ul class="bullet-list">
                <li>Our staff receives intensive training.</li>
                <li>We have the best husbandry program ensuring the health &amp; well-being of the pets in our care.</li>
                <li>We have the most comprehensive guarantees available for our new pet families.</li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="professional-staff">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>Professional Staff</h3>
                <p class="text-black">We are proud of our Pet Counselors, they receive intensive training, and they love what they do. It is this aspect as well as product quality, selection and a real love of animals that gives Safari Stan&rsquo;s Pet Center it&rsquo;s reputation.</p>
                <p class="text-black">A major focus of our Pet Counselors is to educate people about pets. This information assists customers in making informed choices that improves the quality of the their lives and the lives of their pets.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="buying_puppy">
                <div class="container">
                <div class="row equal justify-content-center mx-lg-5">
                <div class="col-lg-8 col-md-6  pr-lg-0">
                <div class="grayish-blue-bg">
                <div class="section_title text-center ">
                <h3 class="text-white pt-2">Buying a Puppy</h3>
                <p>Buying a puppy can be one of the most joyful experiences of your life.</p>
                <p>Safari Stan&rsquo;s Pet Center puppies must meet stringent standards before they can become Safari Stan&rsquo;s puppies.</p>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                <div class="buy-puppies-bg"><img src="img/buy-puupy.jpg" alt="" /></div>
                </div>
                </div>
                </div>
                </div>
                <div class="great-reputation">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>We are Happy to Help</h3>
                <p class="text-black">Every year thousands of unplanned and unwanted puppies and kittens are born. We recommend having your pet spayed or neutered.</p>
                <p class="text-black">If you would prefer to take in a pet from the local shelter, we will be happy to refer you. No matter where you acquire your pet, we will be proud to counsel and assist you.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="professional-staff">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>Pets for a Lifetime</h3>
                <p class="text-black">Occasionally, circumstances arise, making it hard for a pet owner to keep that lifetime promise to a Safari Stan pet. If this is the case, please talk to out Pet Counselors and let us help find a home for your pet.</p>
                <p class="text-black">Our goal is to see that no Safari Stan Pets end up homeless or burden an animal shelter.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="programs-and-benefits">
                <div class="container">
                <div class="row equal justify-content-center">
                <div class="col-lg-6 col-12">
                <div class="gray-bg pb-5">
                <div class="section_title">
                <h3>Our Program</h3>
                <p class="text-black">A Safari Stan&rsquo;s puppy is provided with significant veterinarian care and vaccinations before it is placed in your home.</p>
                </div>
                <div>
                <ul class="bullet-list">
                <li>We use high quality food.</li>
                <li>We weigh them daily and take their temperatures often.</li>
                <li>We groom each puppy daily; including bathing, nail trimming and brushing.</li>
                <li>Socialization with adults and children including lots of play.</li>
                <li>Daily Exercise.</li>
                </ul>
                </div>
                </div>
                </div>
                <div class="col-lg-6 col-12">
                <div class="gray-bg pb-5">
                <div class="section_title">
                <h3>Your Benefits</h3>
                <p class="text-black">Safari Stan&rsquo;s offers many different breeds, we will help match you with the right breed for your personality and lifestyle.</p>
                </div>
                <div>
                <ul class="bullet-list">
                <li>We provide a Health Certificate, and the vaccines up to date.</li>
                <li>Our Puppies come with a Microchip ready for activation.</li>
                <li>3 Generations Pedigree. Registration Papers.</li>
                <li>Safari Stan&rsquo;s provides all customers with a comprehensive one (1) year hereditary and congenital warranty with their puppy.</li>
                <li>Pets for a Lifetime Resources Kit (with a training video).</li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="professional-staff">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>Spay/Neuter</h3>
                <p class="text-black">Our Pet Counselors educate new puppy and kitten owners about responsible pet care. And as a store, we participate in cooperative programs with local veterinarians to offer customers discount incentives to spay or neuter their pet.</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="professional-staff">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title">
                <h3>Safari Stan&rsquo;s Pet Center Enhanced Protection Program</h3>
                <p class="text-black">For our customers going home with a puppy or kitten, this is a strategic partnership combining a national microchip database registry with an Amber Alert-type service, providing an enhanced layer of protection for the pet and their family.</p>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'slug' => 'about',
                'status' => 1,
            ],
            [
                'page_title' => 'Our Breeders',
                'banner' => 'breeders-banner.jpg',
                'banner_text' => 'Our Breeders',
                'description' => '<div class="bredders_desc">
                <div class="container">
                <div class="row justify-content-center ">
                <div class="col-lg-12 col-md-10">
                <div class="section_title text-center">
                <h4>For nearly 4 years, Safari Stan&rsquo;s Pet Center has worked to develop state of the art standards for its retail pet stores. One of the many parts essential to creating that environment is where we get our puppies and kittens. All of our puppies and kittens come from USDA licensed breeders.</h4>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="what-does-that-mean">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="section_title text-center">
                <h3>What Does that Mean?</h3>
                </div>
                </div>
                </div>
                <div class="row equal justify-content-center">
                <div class="col-lg-6 col-12">
                <div class="gray-bg">
                <div class="section_title">
                <h4>USDA licensed breeders</h4>
                <p class="text-black">A Safari Stan&rsquo;s puppy is provided with significant veterinarian care and vaccinations before it is placed in your home.</p>
                </div>
                <div>
                <ul class="bullet-list pl-30 pb-3">
                <li>Commercial Breeders are Professional Breeders</li>
                <li>USDA licensed and inspected by the federal government</li>
                <li>Often AKC inspected</li>
                <li>Subject to the Animal Welfare Act</li>
                <li>Mandatory record keeping of Veterinarian visits, health checks, vaccinations and kennel protocols.</li>
                <li>Mandatory housing covering soundness of construction, ventilation, temperature, adequate size, flooring, walls and safe surfaces.</li>
                <li>Properly trained staff</li>
                <li>Mandatory animal identification</li>
                <li>Documentation of pet history</li>
                <li>Compatible grouping of dogs for safety and socialization.</li>
                <li>All animals must receive adequate exercise, daily feeding and watering, and be housed in a clean and sanitized environment.</li>
                <li>There are approximately 1,800 licensed, regulated breeders in the United States</li>
                </ul>
                </div>
                </div>
                </div>
                <div class="col-lg-6 col-12">
                <div class="gray-bg">
                <div class="section_title">
                <h4>Non - USDA licensed breeders</h4>
                <p class="text-black">Safari Stan&rsquo;s offers many different breeds, we will help match you with the right breed for your personality and lifestyle.</p>
                </div>
                <div>
                <ul class="bullet-list pl-30 pb-3">
                <li>Unlicensed and uninspected</li>
                <li>Not a legal operation</li>
                <li>Very little if any accurate breed record</li>
                <li>No veterinarian care</li>
                <li>Poor housing</li>
                <li>Poor sanitation</li>
                <li>Horrific condition, dogs exposed to the elements, no exercise not socialization</li>
                <li>Little to no staff and not trained</li>
                <li>HSUS estimates there are approximately 9,000 unlicensed and unregulated breeders in the United States</li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="store-facts">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                <div class="section_title mt-lg-5">
                <h3 class="text-center">Pet store Facts</h3>
                <div class="p-lg-5 ">
                <ul class="bullet-list">
                <li>2% of people get their puppies/dogs from a pet store</li>
                <li>26% of dogs are purchased from breeders</li>
                <li>20-30% of cats and dogs are adopted from shelters and rescues</li>
                </ul>
                </div>
                <p class="text-black">The majority of pets are obtained from acquaintances and family members.</p>
                <p class="text-black">Major studies from the University of California at Davis and NCPPSP (National Council on Pet Population Study and Policy), consistently show that pet store dogs relinquished to shelters was statistically insignificant.</p>
                <p class="text-black">The Humane Society of the United States (HSUS) declared that &ldquo;breeders who sell puppies for resale to brokers or pet stores are required to be federally licensed and inspected by the United States Department of Agriculture (USDA). But a gaping loophole in the Animal Welfare Act (AWA) regulations has allowed commercial breeders who sell puppies online, by mail, or over the phone to evade oversight.&rdquo;</p>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'slug' => 'breeders',
                'status' => 1,
            ],
            [
                'page_title' => 'Community Service',
                'banner' => 'contact-banner.jpg',
                'banner_text' => 'Community Service',
                'description' => '<div class="row justify-content-center">
                <div class="col-lg-10 col-md-9">
                <div class="section_title">
                <p class="text-black">Located in Memphis, Tennessee, is one of the world&rsquo;s premier centers for research and treatment of catastrophic diseases in children, primarily pediatric cancers. About 4,700 patients are seen at St. Jude yearly. Most are treated on a continuing outpatient basis as part of ongoing research programs.</p>
                <p class="text-black">The hospital also maintains 60 beds for patients requiring hospitalization during treatment. St. Jude reports treating about 163 patients each day and has treated children in all 50 states and from more than 70 countries. Patients at St. Jude are accepted by physician referral when the child or adolescent is newly diagnosed or suspected of having a disease under research and treatment by the St. Jude staff. ALSAC / St. Jude covers all costs not covered by insurance for medical treatment rendered at St. Jude Children&rsquo;s Research Hospital.</p>
                <p class="text-black">Families without insurance are never asked to pay. During the past five years, 83.7 percent of every dollar received by ALSAC/St. Jude has gone to the current or future needs of St. Jude. For more information on St. Jude, visit the hospital&rsquo;s website at St. Jude Children&rsquo;s Research Hospital.</p>
                </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3">
                <div class="community-logo"><img src="http://localhost:3000/img/make-wish-logo.jpg" alt="" /></div>
                </div>
                <div class="col-lg-10 col-md-9">
                <div class="section_title">
                <p class="text-black">Located in Memphis, Tennessee, is one of the world&rsquo;s premier centers for research and treatment of catastrophic diseases in children, primarily pediatric cancers. About 4,700 patients are seen at St. Jude yearly. Most are treated on a continuing outpatient basis as part of ongoing research programs.</p>
                <p class="text-black">The hospital also maintains 60 beds for patients requiring hospitalization during treatment. St. Jude reports treating about 163 patients each day and has treated children in all 50 states and from more than 70 countries. Patients at St. Jude are accepted by physician referral when the child or adolescent is newly diagnosed or suspected of having a disease under research and treatment by the St. Jude staff. ALSAC / St. Jude covers all costs not covered by insurance for medical treatment rendered at St. Jude Children&rsquo;s Research Hospital.</p>
                <p class="text-black">Families without insurance are never asked to pay. During the past five years, 83.7 percent of every dollar received by</p>
                </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3">
                <div class="community-logo"><img src="http://localhost:3000/img/heal-operation.jpg" alt="" /></div>
                </div>
                <div class="col-lg-10 col-md-9">
                <div class="section_title">
                <p class="text-black">Mission: To offer service dogs, purposed bred by professional breeders, to veterans with PTSD and other disabilities to help them overcome some of the barriers they encounter in daily life. Goal: To raise funds to provide certification training of service dogs at no cost to the veterans.</p>
                </div>
                </div>
                </div>',
                'slug' => 'commmunityservices',
                'status' => 1,
            ],
            [
                'page_title' => 'Financing',
                'banner' => 'veterinarian-center-logo.jpg',
                'banner_text' => 'Financing',
                'description' => '<div class="community_desc">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="financing-top-content">
                <h6>Low Monthly Payments!</h6>
                <p>Here at Safari Stan&rsquo;s Pet Center, we understand that a pet is not always in the immediate budget. And that&rsquo;s why we are proud to offer low monthly payments for those who need it. We don&rsquo;t presume to know your budget or finances, but we can help out. We offer many different kinds of financing for all types of credit scores and financial walks of life. Our managers can explain in detail our different options and how they could work for you.</p>
                <p>Many people ask us if it&rsquo;s strange that we offer financing for animals, but it&rsquo;s actually a very common practice in the industry. Many pets need a hefty initial investment. And the only way for some people to make sure they were taking home everything they needed was to finance all, or even a portion, of the balance. Think of fish tanks, almost all the investment is front-loaded, as you have to have somewhere to put all your pretty new fish! Puppies and kittens can be the same way. You need more supplies in the beginning than you will need ever again. Think of crates, playpens, toys, treats, carriers and much more. These are simply the things you need to be a responsible pet owner, but they can really add up.</p>
                <p>Below you can find a breakdown of the most popular pet financing plans available to consumers.</p>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="row financing-block-2">
                <div class="col-lg-3"><img src="img/vive.jpg" /></div>
                <div class="col-lg-3">
                <ul>
                <li>$500 Deposit</li>
                <li>4% of the Highest Balance will be the Minimum Monthly Payment Calculation</li>
                <li>Fixed 35.99% APR will be the Standard Interest Rate</li>
                <li>$59 will be the Annual Fee while the account has a balance</li>
                </ul>
                </div>
                <div class="col-lg-3 text-center">
                <p>NEW HAVEN LOCATION</p>
                <a class="boxed-btn3 btn-sm" href="#">APPLY NOW</a></div>
                <div class="col-lg-3 text-center">
                <p>STAMFORD LOCATION</p>
                <a class="boxed-btn3" href="#">APPLY NOW</a></div>
                </div>
                <div class="row financing-block-2">
                <div class="col-lg-3"><img src="img/un.jpg" /></div>
                <div class="col-lg-3">
                <ul>
                <li>Fair credit</li>
                <li>$500 Deposit</li>
                <li>$500-$7,500</li>
                <li>18%</li>
                <li>Requires down payment depending on amount borrowed</li>
                <li>For the 90 day interest rebate promotion you pay the total amount financed processing fee, on or before your promotional expiration date.</li>
                <li>6/12/24/36/48 months</li>
                </ul>
                </div>
                <div class="col-lg-3 text-center">
                <p>NEW HAVEN LOCATION</p>
                <a class="boxed-btn3 btn-sm" href="https://credit.ucfs.net/Financing/Apply/XnNGKUhCaCs" target="_blank" rel="noopener">APPLY NOW</a></div>
                <div class="col-lg-3 text-center">
                <p>STAMFORD LOCATION</p>
                <a class="boxed-btn3" href="https://credit.ucfs.net/Financing/Apply/O1pSXXptN3o" target="_blank" rel="noopener">APPLY NOW</a></div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="financing-bottom-block">
                <p>The financing forms are extremely simple to fill out and are soft looks on your credit. We want you to know that we will never pressure you into using financing, but use it as an opportunity for those who need it! Don&rsquo;t hesitate, call us today at (203)901-1003 with any questions you might have about our financing!</p>
                <p>With our latest financing option IGW, EVERYONE IS APPROVED! We offer 3 months same as cash with 50% of the total to be paid upfront, or the remaining balance may be paid over a 9-month period with a 19% interest rate. There is a $50.00 financing service charge to use this option. To get started stop by the store and bring with you a Valid ID and your banking information (Checkbook, Statement, or Mobile Banking).</p>
                </div>',
                'slug' => 'financing',
                'status' => 1,
            ],
            [
                'page_title' => 'Venterinarin',
                'banner' => 'venterinarin-banner.jpg',
                'banner_text' => 'Our Veterinarian',
                'description' => '<div class="community_desc">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="section_title">
                <p class="text-black">At Safari Stan&rsquo;s Pet Center, the health and well-being of our pets is our primary focus and we are dedicated to providing our pets with quality, professional care. All of our puppies have been seen by Orange Veterinary Hospital before being available in a Safari Stan&rsquo;s Pet Center store.</p>
                <p class="text-black">Our consulting veterinarians conduct examinations of our new arrivals, provide regular preventative care and oversee the healthcare protocols for all of our &ldquo;babies&rdquo; while in our store. These veterinarians certify that Safari Stan&rsquo;s Pet Center pets are healthy prior to being available to customers.</p>
                </div>
                </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col">
                <div class="veterinarian-center-logo"><img src="http://localhost:3000/img/orange-veterinarian-logo.jpg" alt="" /></div>
                <div class="veterinarian-center-detail">
                <p>356 Boston Post Road Orange CT 06477<br />Telephone: 203-795-6091<br />Website: www.orangeveterinaryhospital.com</p>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col">
                <div class="veterinarian-center-logo"><img src="http://localhost:3000/img/shore-heaven-logo.jpg" alt="" /></div>
                <div class="veterinarian-center-detail">
                <p>47 Frontage Rd, East Haven, CT 06512<br />Telephone: 203-469-6531<br />Website: www.shorehavenveterinaryhospital.com</p>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col">
                <div class="veterinarian-center-logo"><img src="http://localhost:3000/img/veterinarian-center-logo.jpg" alt="" /></div>
                <div class="veterinarian-center-detail">
                <p>633 Hope Street, Stamford, CT 06907<br />Telephone: 203-817-0440<br />Website: www.stamfordvetcenter.com</p>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="services">
                <div class="container">
                <div class="gray-bg">
                <div class="row justify-content-center  px-lg-3">
                <div class="col-lg-12">
                <div class="section_title">
                <h4>Services</h4>
                </div>
                </div>
                </div>
                <div class="row equal px-lg-5">
                <div class="col-lg-6 col-12">
                <div class="p-3">
                <ul class="bullet-list pl-30 pb-3">
                <li>Early morning drop-off &amp; late pick-up</li>
                <li>Complete medical &amp; surgical care</li>
                <li>Heart worm control</li>
                <li>Preventative Care</li>
                <li>Vaccines</li>
                <li>Boarding</li>
                <li>Grooming</li>
                </ul>
                </div>
                </div>
                <div class="col-lg-6 col-12">
                <div class="pb-3">
                <ul class="bullet-list pl-30 pb-3">
                <li>Dentals &ndash;Dental Evaluation</li>
                <li>Spays &amp; Neuters</li>
                <li>On-sight x-ray, Ultrasound &amp; Laboratory</li>
                <li>Sick pet care &amp; hospitalization if needed</li>
                <li>Emergency care</li>
                <li>Board certified specialists</li>
                <li>24-Hour Emergency Care</li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>',
                'slug' => 'venterinarin',
                'status' => 1,
            ]
            
        ];

        Page::insert($pages);
    }
}
