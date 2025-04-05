<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>কিষান কল্যাণ</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <!-- নেভিগেশন বার -->
    <header>
        <nav>
            <ul>
                <li><a href="#cold-storage">কোল্ড স্টোরেজ</a></li>
                <li><a href="#tractor-rental">ট্র্যাক্টর ভাড়া নিন</a></li>
                <li><a href="#pesticide">কীটনাশক কিনুন</a></li>
                <li><a href="#weather">আবহাওয়া পূর্বাভাস</a></li>
                <li><a href="#pest-alerts">কীট সতর্কতা</a></li>
                <li><a href="#farming-techniques">কৃষি প্রযুক্তি</a></li>
                <li><a href="#chatbot">চ্যাটবট</a></li>
            </ul>
        </nav>
    </header>

    <!-- হিরো সেকশন -->
    <section class="hero">
        <h1>কিষান কল্যাণে আপনাকে স্বাগতম</h1>
        <p>কৃষকদের সকল প্রয়োজনের জন্য একটি স্থান: কোল্ড স্টোরেজ, ট্র্যাক্টর ভাড়া, কীটনাশক, আবহাওয়া আপডেট এবং আরও অনেক কিছু!</p>
    </section>

    <!-- কোল্ড স্টোরেজ সেকশন -->
    <section id="cold-storage">
        <h2>আপনার নিকটস্থ কোল্ড স্টোরেজ</h2>
        <p>আপনার ফসলগুলি রক্ষা করার জন্য নিকটস্থ কোল্ড স্টোরেজ সুবিধাগুলি খুঁজুন।</p>
        <div id="cold-storage-map">
            <a href="coldstorage.html"><p>এখানে ক্লিক করুন</p></a>
        </div>
    </section>

    <!-- ট্র্যাক্টর ভাড়া সেকশন -->
    <section id="tractor-rental">
        <h2>ট্র্যাক্টর ভাড়া নিন</h2>
        <p>আপনার প্রয়োজন অনুযায়ী ট্র্যাক্টর নির্বাচন করুন এবং ভাড়া নিন।</p>
        <form action="TractorRental.html" method="post">
            <label for="tractor-type">ট্র্যাক্টর প্রকার নির্বাচন করুন:</label>
            <select id="tractor-type">
                <option value="small">ট্র্যাক্টর প্রকার নির্বাচন করুন</option>
                <option value="small">ছোট ট্র্যাক্টর</option>
                <option value="medium">মধ্যম ট্র্যাক্টর</option>
                <option value="large">বড় ট্র্যাক্টর</option>
            </select>
            <br>
            <label for="rental-duration">ভাড়ার সময়কাল:</label>
            <input type="number" id="rental-duration" min="1" placeholder="দিন">
            <br>
            <button type="submit">ট্র্যাক্টর বুক করুন</button>
        </form>
    </section>

    <!-- কীটনাশক কেনার সেকশন -->
    <section id="pesticide">
        <h2>কীটনাশক কিনুন</h2>
        <p>আপনার ফসলের জন্য কীটনাশকগুলি অন্বেষণ করুন:</p>
        <div>
            <h3>পণ্য তালিকা</h3>
            <ul>
                <a href="https://www.amazon.in/s?k=Insecticide+A&crid=WSICUXF2U89I&sprefix=insecticide+a%2Caps%2C216&ref=nb_sb_noss_2"><li>কীটনাশক A</li></a>
                <a href="https://www.amazon.in/s?k=Fungicide+B&crid=1ID039SDTKUA1&sprefix=fungicide+b%2Caps%2C197&ref=nb_sb_noss_2"><li>ফাঙ্গিসাইড B</li></a>
                <a href="https://www.amazon.in/s?k=Herbicide+C&crid=3AKO2G0SK9GGI&sprefix=herbicide+c%2Caps%2C195&ref=nb_sb_noss_2"><li>হার্বিসাইড C</li></a>
                <li>এবং আরও অনেক কিছু: নিচের বোতামে ক্লিক করুন</li>
            </ul>
            <a href="https://www.amazon.in/?&tag=googhydrabk1-21&ref=pd_sl_5szpgfto9i_e&adgrpid=155259813593&hvpone=&hvptwo=&hvadid=674893540034&hvpos=&hvnetw=g&hvrand=7633956169893688526&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9209673&hvtargid=kwd-64107830&hydadcr=14452_2316413&gad_source=1"><button>আরও (কিছুই)</button></a>
        </div>
    </section>

    <!-- আবহাওয়া পূর্বাভাস সেকশন -->
    <section id="weather">
        <h2>আবহাওয়া পূর্বাভাস</h2>
        <p>আপনার অঞ্চলে বাস্তব সময়ের আবহাওয়া পূর্বাভাসের সাথে আপডেট থাকুন।</p>
        <div id="weather-info">
            <a href="weather.html"><p>আবহাওয়া ডেটা একীকরণ এখানে।</p></a>
        </div>
    </section>

    <!-- কীট সতর্কতা সেকশন -->
    <section id="pest-alerts">
        <h2>কীট সতর্কতা</h2>
        <h2>কাজের স্মরণিকা</h2>
        <div>
            <input type="text" id="task" placeholder="আপনার কাজ লিখুন">
            <input type="datetime-local" id="time">
            <button onclick="setReminder()">সতর্কতা সেট করুন</button>
        </div>
    
        <audio id="alarmSound" src="https://actions.google.com/sounds/v1/alarms/alarm_clock.ogg" preload="auto"></audio>
    
        <script>
            function setReminder() {
                const taskInput = document.getElementById('task').value;
                const timeInput = document.getElementById('time').value;
                const alarmSound = document.getElementById('alarmSound');
    
                if (!taskInput || !timeInput) {
                    alert('দয়া করে কাজের বিবরণ এবং সময় উভয়ই লিখুন।');
                    return;
                }
    
                const taskTime = new Date(timeInput).getTime();
                const currentTime = new Date().getTime();
                const timeDifference = taskTime - currentTime;
    
                if (timeDifference <= 0) {
                    alert('দয়া করে ভবিষ্যতের সময় লিখুন।');
                    return;
                }
    
                setTimeout(() => {
                    alarmSound.play();
                    alert(`শুরু করার সময়: ${taskInput}`);
                }, timeDifference);
            }
        </script>
    </section>

    <!-- বৈজ্ঞানিক কৃষি প্রযুক্তি সেকশন -->
    <section id="farming-techniques">
        <h2>বৈজ্ঞানিক কৃষি প্রযুক্তি</h2>
        <p>সর্বশেষ কৃষি প্রযুক্তি এবং সেরা অনুশীলন সম্পর্কে জানুন।</p>
        <ul>
            <li>ফসল ঘূর্ণন
                এটি একটি কৃষি অনুশীলন, যেখানে বিভিন্ন ধরনের ফসল একই অঞ্চলে বিভিন্ন মৌসুমে বা বছরে চাষ করা হয়। এই পদ্ধতির অনেক সুবিধা রয়েছে, যেমন নাইট্রোজেন-ফিক্সিং ফসল যেমন ডাল, পুষ্টির প্রয়োজনীয় ফসল যেমন শস্যের সাথে পরিবর্তন করে মাটির উর্বরতা উন্নত করা। এটি কীটপতঙ্গ এবং রোগ নিয়ন্ত্রণে সহায়তা করে কারণ এটি ফসল-নির্দিষ্ট কীটপতঙ্গ এবং প্যাথোজেনের জীবনচক্রকে বাধা দেয়, যার ফলে রাসায়নিক কীটনাশকের প্রয়োজনীয়তা কমে যায়। ফসল ঘূর্ণন মাটির গঠন উন্নত করে এবং মাটির ক্ষয় রোধ করে। এছাড়াও, বিভিন্ন ফসল চাষ করার ফলে বিভিন্ন প্রতিযোগিতামূলক ক্ষমতা থাকার কারণে এটি আগাছা ব্যবস্থাপনায় উন্নতি করতে পারে। তবে, ফসল ঘূর্ণনের কিছু অসুবিধাও রয়েছে। এর জন্য ফসলের প্রয়োজনীয়তা এবং মাটির অবস্থার বিষয়ে সতর্ক পরিকল্পনা এবং জ্ঞানের প্রয়োজন, যা সময়সাপেক্ষ এবং জটিল হতে পারে। ফসল ঘূর্ণনের দিকে পরিবর্তনশীল কৃষকদের চ্যালেঞ্জের মুখোমুখি হতে হতে পারে, এবং সঠিকভাবে পরিচালনা না করলে ফসলের উৎপাদনে পরিবর্তন আসতে পারে। এছাড়াও, ফসল ঘূর্ণনের জন্য বিভিন্ন ফসলের বীজ এবং ইনপুটে অতিরিক্ত শ্রম এবং বিনিয়োগ প্রয়োজন হতে পারে। এই চ্যালেঞ্জগুলির পাশাপাশি, ফসল ঘূর্ণনের দীর্ঘমেয়াদী সুবিধাগুলি, যেমন মাটির স্বাস্থ্য উন্নতি, জীববৈচিত্র্য বৃদ্ধি, এবং পরিবেশগত প্রভাব হ্রাস, এটি টেকসই কৃষিতে একটি মূল্যবান অনুশীলন করে তোলে।
                অবশ্যই! এখানে ফসল ঘূর্ণনের সুবিধা এবং অসুবিধাগুলি পয়েন্ট-ওয়াইজ উপস্থাপন করা হয়েছে:
                <br>
                <br>
                 সুবিধা:
                <br>
                <br>
                1. মাটির উর্বরতা উন্নত করা:
                - নাইট্রোজেন-ফিক্সিং ফসল যেমন ডাল, পুষ্টির প্রয়োজনীয় ফসল যেমন শস্যের সাথে পরিবর্তন করে মাটির পুষ্টির স্তরগুলি বজায় রাখতে সহায়তা করে।
                <br>
                <br>
                2. কীটপতঙ্গ এবং রোগ ব্যবস্থাপনা:
                - ফসল পরিবর্তন করা ফসল-নির্দিষ্ট কীটপতঙ্গ এবং প্যাথোজেনের জীবনচক্রকে বাধা দেয়, যার ফলে তাদের জনসংখ্যা কমে যায় এবং রাসায়নিক কীটনাশকের প্রয়োজনীয়তা কমে যায়।
                <br>
                <br>
                3. মাটির গঠন উন্নত করা:
                - বিভিন্ন ফসলের বিভিন্ন শিকড়ের গঠন থাকে, যা মাটির গঠন উন্নত করতে এবং মাটির ক্ষয় রোধ করতে সহায়তা করে।
                <br>
                <br>
                4. আগাছা নিয়ন্ত্রণ:
                - বিভিন্ন ফসল চাষ করার ফলে বিভিন্ন প্রতিযোগিতামূলক ক্ষমতা থাকার কারণে এটি আগাছার সংখ্যা কমাতে সহায়তা করতে পারে।
                <br>
                <br>
                5. জীববৈচিত্র্য বৃদ্ধি:
                - ফসল ঘূর্ণন জীববৈচিত্র্যকে উৎসাহিত করে, যা পরিবেশের স্থিতিশীলতা এবং মাটির স্বাস্থ্যকে উন্নত করতে সহায়তা করে।
                <br>
                <br>
                 অসুবিধা:
                
                <br>
                <br>
                 1. জটিল পরিকল্পনা এবং ব্যবস্থাপনা:
                - ফসলের প্রয়োজনীয়তা এবং মাটির অবস্থার বিষয়ে জ্ঞানের প্রয়োজন, যা সময়সাপেক্ষ এবং জটিল হতে পারে।
                <br>
                <br>
                2. প্রাথমিক পরিবর্তনের চ্যালেঞ্জ:
                - একক ফসলের পদ্ধতিতে অভ্যস্ত কৃষকদের ফসল ঘূর্ণনের দিকে পরিবর্তন করতে চ্যালেঞ্জের মুখোমুখি হতে হতে পারে, যার মধ্যে যন্ত্রপাতি এবং কৃষি প্রযুক্তিতে পরিবর্তন অন্তর্ভুক্ত রয়েছে।
                <br>
                <br>
                3. উৎপাদনে পরিবর্তন:
                - ফসল ঘূর্ণনের সঠিক ব্যবস্থাপনা না হলে উৎপাদনে অস্থায়ী হ্রাস হতে পারে।
                <br>
                <br>
                4. শ্রম এবং খরচ:
                - ফসল ঘূর্ণন বাস্তবায়নের জন্য অতিরিক্ত শ্রম এবং বিভিন্ন ফসলের বীজ এবং ইনপুটে বিনিয়োগ প্রয়োজন হতে পারে।
                <br>
                <br>
                5. বাজারের চাহিদা:
                - কৃষকদের ঘূর্ণিত ফসলের জন্য বাজারের চাহিদা বিবেচনা করতে হবে যাতে অর্থনৈতিক স্থিতিশীলতা নিশ্চিত হয়।
            </li>
            <li>মাটির স্বাস্থ্য ব্যবস্থাপনা
                হল এমন পদ্ধতি এবং কৌশলগুলি যা মাটির সামগ্রিক স্বাস্থ্য এবং উর্বরতা বজায় রাখার বা উন্নত করার জন্য লক্ষ্য করে। স্বাস্থ্যকর মাটি টেকসই কৃষির জন্য অত্যন্ত গুরুত্বপূর্ণ, কারণ এটি উদ্ভিদের বৃদ্ধিকে সমর্থন করে, জল প্রবাহ এবং সঞ্চয়কে উন্নত করে, এবং উপকারী মাইক্রোজীবের একটি বৈচিত্র্যময় বাস্তুতন্ত্রকে উৎসাহিত করে। এখানে মাটির স্বাস্থ্য ব্যবস্থাপনার প্রধান পয়েন্টগুলি, সুবিধা এবং অসুবিধাগুলি রয়েছে:
                <br>
                <br>
                সুবিধা:
                <br>
                <br>
                1. মাটির উর্বরতা উন্নত করা:
                - ফসল ঘূর্ণন এবং জৈব সংশোধনগুলি মাটির পুষ্টি পুনরুদ্ধার করতে এবং মাটির গঠন উন্নত করতে সহায়তা করে।
                <br>
                <br>
                2. জল ধারণ ক্ষমতা উন্নত করা:
                - স্বাস্থ্যকর মাটির জল প্রবাহ এবং সঞ্চয়ের ক্ষমতা ভাল, যা খরা এবং ক্ষয় ঝুঁকি কমায়।
                <br>
                <br>
                3. কীটপতঙ্গ এবং রোগ নিয়ন্ত্রণ:
                - সমন্বিত কীটপতঙ্গ ব্যবস্থাপনা এবং ফসল ঘূর্ণন রাসায়নিক কীটনাশকের উপর নির্ভরতা কমায়।
                <br>
                <br>
                4. জীববৈচিত্র্য বৃদ্ধি:
                - বিভিন্ন ফসলের সিস্টেম এবং কম রাসায়নিক ইনপুটগুলি মাটির জীবের একটি সমৃদ্ধ বাস্তুতন্ত্রকে উৎসাহিত করে।
                <br>
                <br>
                5. টেকসই কৃষি:
                - মাটির স্বাস্থ্য ব্যবস্থাপনা পদ্ধতিগুলি কৃষি সিস্টেমের দীর্ঘমেয়াদী স্থায়িত্ব এবং স্থিতিশীলতা উন্নত করে।
                <br>
                <br>
                অসুবিধা:
                <br>
                <br>
                1. শ্রম-গণনা:
                - মাটির স্বাস্থ্য ব্যবস্থাপনা পদ্ধতিগুলি বাস্তবায়ন করা শ্রম-গণনামূলক হতে পারে এবং অতিরিক্ত সময় এবং প্রচেষ্টার প্রয়োজন হতে পারে।
                <br>
                <br>
                2. প্রাথমিক খরচ:
                - টেকসই পদ্ধতিতে পরিবর্তন করার সময় নতুন যন্ত্রপাতি, জৈব ইনপুট এবং মাটি পরীক্ষার জন্য প্রাথমিক খরচ হতে পারে।
                <br>
                <br>
                3. জ্ঞান এবং দক্ষতা:
                - সফল মাটির স্বাস্থ্য ব্যবস্থাপনার জন্য মাটি বিজ্ঞান, ফসলের প্রয়োজনীয়তা এবং টেকসই পদ্ধতিগুলির সম্পর্কে জ্ঞানের প্রয়োজন, যা জটিল হতে পারে।
                <br>
                <br>
                4. স্বল্পমেয়াদী উৎপাদন হ্রাস:
                - কিছু পদ্ধতি, যেমন কম চাষ, মাটির স্বাস্থ্য উন্নত হওয়া পর্যন্ত স্বল্পমেয়াদী উৎপাদন হ্রাস করতে পারে।
                <br>
                <br>
                5. বাজারের সীমাবদ্ধতা:
                - কৃষকদের অর্থনৈতিক স্থিতিশীলতা নিশ্চিত করতে টেকসই পদ্ধতিতে চাষ করা ফসলের জন্য বাজারের চাহিদা বিবেচনা করতে হবে।
            </li>
        </ul>
    </section>

    <!-- চ্যাটবট সেকশন -->
    <section id="chatbot">
        <h2>আমাদের সাথে কথা বলুন</h2>
        <div id="chatbot-box">
            <p>কৃষি সম্পর্কে কিছু জিজ্ঞাসা করুন!</p>
            <input type="text" id="chat-input" placeholder="আপনার প্রশ্ন টাইপ করুন...">
            <button onclick="startChat()">পাঠান</button>
            <div id="chat-response"></div>
        </div>
    </section>

    <footer>
        <p>কিষান সহায়তা ওয়েবসাইট &copy; 2025</p>
    </footer>

    <!-- জাভাস্ক্রিপ্ট -->
    <script>
        function sendAlert() {
            alert('কীট আলার্ম: আবহাওয়া এবং কীট তথ্যের ভিত্তিতে কীটনাশক প্রয়োগের সময়!');
        }

        function startChat() {
            const userQuestion = document.getElementById('chat-input').value;
            const responseDiv = document.getElementById('chat-response');
            if (userQuestion) {
                responseDiv.innerHTML = `আপনি জিজ্ঞাসা করেছেন: "${userQuestion}"<br>চ্যাটবটের উত্তর: "এটি একটি দুর্দান্ত প্রশ্ন! দয়া করে নির্দিষ্ট পরামর্শের জন্য স্থানীয় বিশেষজ্ঞের সাথে যোগাযোগ করুন।"`;
            } else {
                responseDiv.innerHTML = "দয়া করে একটি প্রশ্ন টাইপ করুন।";
            }
        }
    </script>
</body>
</html>