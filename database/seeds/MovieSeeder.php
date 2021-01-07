<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'Drama'],
            ['name'=>'Kids'],
            ['name'=>'TV Show']
        ]);

        DB::table('movies')->insert([
            [
                'genre_id'=>1,
                'title'=>'The World of the Married',
                'photo'=>'images/wom.jpg',
                'description'=>'The World of the Married adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Kim Hee-ae, Park Hae-joon, dan Han So-hee. Drama ini diadaptasi dari seri televisi Inggris Doctor Foster dan disiarkan di JTBC setiap Jumat dan Sabtu pukul 22:50 mulai 27 Maret hingga 16 Mei 2020.',
                'rating'=>'images/4star.png'
            ],
            [
                'genre_id'=>1,
                'title'=>'Boys Over Flowers',
                'photo'=>'images/bof.jpg',
                'description'=>'Boys Over Flowers adalah drama adaptasi Korea yang diadaptasi dari manga Jepang Hana Yori Dango. Boys Before Flowers sendiri mulai ditayangkan tanggal 5 Januari 2009 di KBS2TV dan berakhir pada tanggal 31 Maret 2009 dengan 25 episode.',
                'rating'=>'images/3star.png'
            ],
            [
                'genre_id'=>1,
                'title'=>'Descendants of The Sun',
                'photo'=>'images/dots.jpg',
                'description'=>'Descendants of the Sun adalah serial televisi Korea Selatan tahun 2016 yang dibintangi Song Joong-ki, Song Hye-kyo, Jin Goo dan Kim Ji-won. Drama ini disiarkan di KBS2 mulai 24 Februari hingga 14 April 2016 setiap Rabu dan Kamis pukul 22.00 untuk 16 episode.',
                'rating'=>'images/4star.png'
            ],
            [
                'genre_id'=>1,
                'title'=>'Startup',
                'photo'=>'images/startup.jpg',
                'description'=>'Start-Up adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Bae Suzy, Nam Joo-hyuk, Kim Seon-ho, dan Kang Han-na. Drama ini disiarkan di tvN setiap Sabtu dan Minggu pukul 21:00 mulai 17 Oktober 2020 dan juga tersedia untuk penonton internasional melalui Netflix.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>1,
                'title'=>'Itaewon Class',
                'photo'=>'images/ic.jpg',
                'description'=>'Itaewon Class adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Park Seo-joon, Kim Da-mi, Yoo Jae-myung dan Kwon Nara. Seri ini berdasarkan webtoon dengan nama yang sama dan merupakan seri pertama yang diproduksi oleh perusahaan distribusi film Showbox.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>2,
                'title'=>'SpongeBob SquarePants',
                'photo'=>'images/spongebob.jpg',
                'description'=>'SpongeBob SquarePants adalah sebuah serial animasi yang paling terpopuler di Nickelodeon. Pada awalnya serial kartun animasi ini ditayangkan pada tahun 1999 di Amerika Serikat dan dicipta oleh Stephen Hillenburg, seorang animator dan ahli biologi laut, dan diterbitkan oleh perusahaannya, United Plankton Pictures Inc.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>2,
                'title'=>'Thomas & Friends',
                'photo'=>'images/thomas.jpg',
                'description'=>'Thomas dan Friends merupakan serial televisi anak-anak Inggris, siaran pertama di jaringan ITV pada bulan September 1984.',
                'rating'=>'images/3star.png'
            ],
            [
                'genre_id'=>2,
                'title'=>'Rick and Morty',
                'photo'=>'images/rm.jpg',
                'description'=>'Kakek Rick Sanchez pindah tinggal bersama keluarga putrinya. Jerry, suami Beth, khawatir karena Rick memakai garasi sebagai laboratorium pribadinya.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>2,
                'title'=>'Tayo the Little Bus',
                'photo'=>'images/tayo.jpg',
                'description'=>'Tayo the Little Bus adalah serial animasi Korea Selatan yang diproduksi oleh Iconix Entertainment dan Educational Broadcasting System.',
                'rating'=>'images/3star.png'
            ],
            [
                'genre_id'=>2,
                'title'=>'We Bare Bears',
                'photo'=>'images/wbb.jpg',
                'description'=>'We Bare Bears adalah sitkom animasi Amerika Serikat yang dibuat oleh Daniel Chong. Acara ini ditayangkan perdana di Cartoon Network dan mengikuti kisah tiga beruang bersaudara, Grizzly, Panda, dan Ice Bear, dan usaha canggung mereka untuk mengintegrasikan diri dengan dunia manusia di Wilayah Teluk San Francisco.',
                'rating'=>'images/3star.png'
            ],
            [
                'genre_id'=>3,
                'title'=>'Vikings',
                'photo'=>'images/viking.jpg',
                'description'=>'Sebagai Ragnar Lodbrok, seorang petani Norse, melakukan penyerbuan besar-besaran ke wilayah Inggris dengan bantuan rekan-rekan prajurit. Ia akhirnya berkuasa atas Viking dan menjadi raja Skandinavia.',
                'rating'=>'images/4star.png'
            ],
            [
                'genre_id'=>3,
                'title'=>'Peaky Blinders',
                'photo'=>'images/peb.jpg',
                'description'=>'Peaky Blinders adalah serial televisi drama kriminal Inggris yang dibuat oleh Steven Knight. Berlatar di Birmingham, Inggris, serial ini mengikuti eksploitasi keluarga kriminal Shelby setelah langsung Perang Dunia Pertama.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>3,
                'title'=>'Money Heist',
                'photo'=>'images/mh.jpg',
                'description'=>'Money Heist adalah serial drama televisi bertemakan kriminal dari Spanyol. Diproduseri oleh Álex Pina, seri ini awalnya dimaksudkan sebagai seri terbatas untuk diceritakan dalam dua bagian. Seri ini aslinya memiliki 15 episode yang mengudara jaringan televisi Spanyol, Antena 3, dari 2 Mei 2017 hingga 23 November 2017.',
                'rating'=>'images/5star.png'
            ],
            [
                'genre_id'=>3,
                'title'=>'Stranger Things',
                'photo'=>'images/st.jpg',
                'description'=>'Stranger Things adalah serial televisi web fiksi ilmiah, horor dari Amerika Serikat yang dibuat, ditulis, diarahkan, dan diproduksi oleh The Duffer Brothers, serta co-executive yang diproduksi oleh Shawn Levy dan Dan Cohen.',
                'rating'=>'images/3star.png'
            ],
            [
                'genre_id'=>3,
                'title'=>'13 Reasons Why',
                'photo'=>'images/13.jpg',
                'description'=>'13 Reasons Why adalah serial drama misteri WebTV Amerika Serikat yang berdasarkan pada novel tahun 2007 Thirteen Reasons Why oleh Jay Asher dan diadaptasi oleh Brian Yorkey untuk Netflix.',
                'rating'=>'images/4star.png'
            ]
        ]);

        DB::table('episodes')->insert([
            [
                'movie_id'=>1,
                'episode'=>'episode 1',
                'title'=>'Lonely Sailing (고독한 항해)'
            ],
            [
                'movie_id'=>1,
                'episode'=>'episode 2',
                'title'=>'Nothing on You'
            ],
            [
                'movie_id'=>1,
                'episode'=>'episode 3',
                'title'=>'Sad'
            ],
            [
                'movie_id'=>1,
                'episode'=>'episode 4',
                'title'=>'Just Leave Me (그냥 나를 버려요)'
            ],
            [
                'movie_id'=>1,
                'episode'=>'episode 5',
                'title'=>'Tears Send You Away (눈물로 너를 떠나보낸다)'
            ],
            [
                'movie_id'=>1,
                'episode'=>'episode 6',
                'title'=>'The Days That Were Loved (사랑했던 날들)'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 2',
                'title'=>'1. Episode 2'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 2',
                'title'=>'2. Episode 2'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 3',
                'title'=>'3. Episode 3'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 3',
                'title'=>'3. Episode 3'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 4',
                'title'=>'4. Episode 4'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 5',
                'title'=>'5. Episode 5'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 6',
                'title'=>'6. Episode 6'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 7',
                'title'=>'7. Episode 7'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 8',
                'title'=>'8. Episode 8'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 9',
                'title'=>'9. Episode 9'
            ],
            [
                'movie_id'=>2,
                'episode'=>'episode 10',
                'title'=>'10. Episode 10'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 1',
                'title'=>'Will You Be My Doctor?'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 2',
                'title'=>'We Bump into Each Other While Passing by'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 3',
                'title'=>'How Have You Been?'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 4',
                'title'=>'I Will Find a Way to Drink'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 5',
                'title'=>'What Should I do About the Kiss?'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 6',
                'title'=>'I Shouldn’t Have Received His Apology'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 7',
                'title'=>'I Missed You'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 8',
                'title'=>'Comfort the Deceased With a Silent Prayer'
            ],
            [
                'movie_id'=>3,
                'episode'=>'episode 9',
                'title'=>'That Wasnt Me'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 1',
                'title'=>'START-UP'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 2',
                'title'=>'FAMILY, FRIENDS, FOOLS'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 3',
                'title'=>'Angel'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 4',
                'title'=>'Sandbox'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 5',
                'title'=>'Hackathon'
            ],
            [
                'movie_id'=>4,
                'episode'=>'episode 6',
                'title'=>'Key Man'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 1',
                'title'=>'I Will Become Stronger'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 2',
                'title'=>'Revenge & You Dont Want to Ruin Your Life'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 3',
                'title'=>'My Plan is 15 Years, So Look Forward to It'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 4',
                'title'=>'Did You Report It?'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 5',
                'title'=>'Youre Always Overly Shiny'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 6',
                'title'=>'I Like the Boss, So... You Have to be Ruined'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 7',
                'title'=>'In a Fight, the First Hit is Important, and It’s From Behind!'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 8',
                'title'=>'You Never Took Anything From Me'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 9',
                'title'=>'Im Jealous of It..'
            ],
            [
                'movie_id'=>5,
                'episode'=>'episode 10',
                'title'=>'I Make The Same Promise With Everything'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 1',
                'title'=>'Cave Dwelling Sponge'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 2',
                'title'=>'The Clam Whisperer'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 3',
                'title'=>'Spot Returns'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 4',
                'title'=>'The Check-Up'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 5',
                'title'=>'Spin the Bottle'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 6',
                'title'=>'Theres a Sponge in My Soup'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 7',
                'title'=>'Larry the Floor Manager'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 8',
                'title'=>'No Pictures Please'
            ],
            [
                'movie_id'=>6,
                'episode'=>'episode 9',
                'title'=>'Sanitation Insanity'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 1',
                'title'=>'Thomas & Gordon'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 2',
                'title'=>'Edward & Gordon'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 3',
                'title'=>'The Sad Story of Henry'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 4',
                'title'=>'Edward, Gordon & Henry'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 5',
                'title'=>'Thomas Train'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 6',
                'title'=>'Thomas & the Trucks'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 7',
                'title'=>'Thomas & the Breakdown Train'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 8',
                'title'=>'James & the Coaches'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 9',
                'title'=>'Troublesome Trucks'
            ],
            [
                'movie_id'=>7,
                'episode'=>'episode 10',
                'title'=>'James & the Express'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 1',
                'title'=>'Pilot'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 2',
                'title'=>'Lawnmower Dog'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 3',
                'title'=>'Anatomy Park'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 4',
                'title'=>'M. Night Shaym-Aliens!'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 5',
                'title'=>'Meeseeks and Destroy'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 6',
                'title'=>'Rick Potion #9'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 7',
                'title'=>'Raising Gazorpazorp'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 8',
                'title'=>'Rixty Minutes'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 9',
                'title'=>'Something Ricked This Way Comes'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 10',
                'title'=>'Close Rick-counters of the Rick Kind'
            ],
            [
                'movie_id'=>8,
                'episode'=>'episode 11',
                'title'=>'Ricksy Business'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 1',
                'title'=>'The New Friend, Heart / We Are A Family'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 2',
                'title'=>'Rogi the Sweeper / I Know It All'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 3',
                'title'=>'A School Day / Cheer Up Frank'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 4',
                'title'=>'A Weekend With Citu / Tayo’s Promise'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 5',
                'title'=>'Gani The Super Star / Toto And Bongbong'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 6',
                'title'=>'Laugh, Pat / We Are The Best With Each Other'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 7',
                'title'=>'Kaku & Champ’s Trip To The City / I Can’t Sleep'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 8',
                'title'=>'I Want To Be Your Friend / City Heroes, Tayo & Duri'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 9',
                'title'=>'We Are The Heavy-Duty Circus / The Best Mechanic'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 10',
                'title'=>'I Want A Puppy / Ask Me Anything'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 11',
                'title'=>'Poco’s Flower / Tayo’s Christmas'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 12',
                'title'=>'Tayo’s Earth Defense Plan 1 / Tayo’s Earth Defense Plan 2'
            ],
            [
                'movie_id'=>9,
                'episode'=>'episode 13',
                'title'=>'Somebody Help Us / The Little Buses Sports Day'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 1',
                'title'=>'Our Stuff'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 2',
                'title'=>'Viral Video'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 3',
                'title'=>'Food Truck'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 4',
                'title'=>'Chloe'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 5',
                'title'=>'Pandas Date'
            ],
            [
                'movie_id'=>10,
                'episode'=>'episode 6',
                'title'=>'Everyday Bears'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 1',
                'title'=>'Rites of Passage'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 2',
                'title'=>'Wrath of the Northmen'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 3',
                'title'=>'Dispossessed'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 4',
                'title'=>'Trial'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 5',
                'title'=>'Raid'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 6',
                'title'=>'Burial of the Dead'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 7',
                'title'=>'A Kings Ransom'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 8',
                'title'=>'Sacrifice'
            ],
            [
                'movie_id'=>11,
                'episode'=>'episode 9',
                'title'=>'All Change'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 1',
                'title'=>'Episode 1'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 2',
                'title'=>'Episode 2'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 3',
                'title'=>'Episode 3'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 4',
                'title'=>'Episode 4'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 5',
                'title'=>'Episode 5'
            ],
            [
                'movie_id'=>12,
                'episode'=>'episode 6',
                'title'=>'Episode 6'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 1',
                'title'=>'Efectuar lo acordado'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 2',
                'title'=>'Imprudencias letales'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 3',
                'title'=>'Errar al disparar'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 4',
                'title'=>'Caballo de Troya'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 5',
                'title'=>'El día de la marmota'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 6',
                'title'=>'La cálida Guerra Fría'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 7',
                'title'=>'Refrigerada inestabilidad'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 8',
                'title'=>'Tú lo has buscado'
            ],
            [
                'movie_id'=>13,
                'episode'=>'episode 9',
                'title'=>'El que la sigue la consigue'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 1',
                'title'=>'Chapter One: The Vanishing of Will Byers'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 2',
                'title'=>'Chapter Two: The Weirdo on Maple Street'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 3',
                'title'=>'Chapter Three: Holly, Jolly'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 4',
                'title'=>'Chapter Four: The Body'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 5',
                'title'=>'Chapter Five: The Flea and the Acrobat'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 6',
                'title'=>'Chapter Six: The Monster'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 7',
                'title'=>'Chapter Seven: The Bathtub'
            ],
            [
                'movie_id'=>14,
                'episode'=>'episode 8',
                'title'=>'Chapter Eight: The Upside Down'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 1',
                'title'=>'The First Polaroid'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 2',
                'title'=>'Two Girls Kissing'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 3',
                'title'=>'The Drunk Slut'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 4',
                'title'=>'The Second Polaroid'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 5',
                'title'=>'The Chalk Machine'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 6',
                'title'=>'The Smile at the End of the Dock'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 7',
                'title'=>'The Third Polaroid'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 8',
                'title'=>'The Little Girl'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 9',
                'title'=>'The Missing Page'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 10',
                'title'=>'Smile, Bitches!'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 11',
                'title'=>'Bryce and Chloe'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 12',
                'title'=>'The Box of Polaroids'
            ],
            [
                'movie_id'=>15,
                'episode'=>'episode 13',
                'title'=>'Bye'
            ]
        ]);
    }
}
