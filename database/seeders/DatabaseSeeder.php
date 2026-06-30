<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\GalleryItem;
use App\Models\Staff;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@mediabundle.com',
            'password' => bcrypt('password'),
        ]);

        // Seed Departments
        $cardiology = Department::create([
            'name' => 'Cardiology',
            'slug' => 'cardiology',
            'description' => 'Providing comprehensive heart care including diagnostics, surgery, and rehabilitation.',
            'icon' => '',
            'is_active' => true,
        ]);

        $dermatology = Department::create([
            'name' => 'Dermatology',
            'slug' => 'dermatology',
            'description' => 'Dedicated skin care treatments for patients of all ages.',
            'icon' => '',
            'is_active' => true,
        ]);

        $gastroenterology = Department::create([
            'name' => 'Gastroenterology',
            'slug' => 'gastroenterology',
            'description' => 'Expert management of digestive system and liver disorders.',
            'icon' => '',
            'is_active' => true,
        ]);

        $maternity = Department::create([
            'name' => 'Maternity and Obstetrics',
            'slug' => 'maternity-and-obstetrics',
            'description' => 'Comprehensive pregnancy, childbirth, and postnatal care.',
            'icon' => '',
            'is_active' => true,
        ]);

        $neurology = Department::create([
            'name' => 'Neurology',
            'slug' => 'neurology',
            'description' => 'Neurology departments offer specialized treatment for complex nerve systems and brain disorders.',
            'icon' => '',
            'is_active' => true,
        ]);

        $oncology = Department::create([
            'name' => 'Oncology',
            'slug' => 'oncology',
            'description' => 'Providing compassionate cancer treatment and clinical research.',
            'icon' => '',
            'is_active' => true,
        ]);

        $orthopedics = Department::create([
            'name' => 'Orthopedics',
            'slug' => 'orthopedics',
            'description' => 'Specialized care for bones, joints, and muscular system.',
            'icon' => '',
            'is_active' => true,
        ]);

        $pediatrics = Department::create([
            'name' => 'Pediatrics',
            'slug' => 'pediatrics',
            'description' => 'Child health services and pediatric care from infancy to adolescence.',
            'icon' => '',
            'is_active' => true,
        ]);

        $urology = Department::create([
            'name' => 'Urology',
            'slug' => 'urology',
            'description' => 'Advanced diagnostics and treatment for urinary tract conditions.',
            'icon' => '',
            'is_active' => true,
        ]);

        // Seed Doctors
        Doctor::create([
            'department_id' => $neurology->id,
            'name' => 'Dr. Emily Thompson',
            'slug' => 'dr-emily-thompson',
            'title' => 'Dr.',
            'specialty' => 'Neurologist',
            'bio' => 'Dr. Emily Thompson is a highly skilled Neurologist at TNC Medflow, dedicated to diagnosing and treating complex neurological conditions.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f90_Rectangle%2075%20(2).webp',
        ]);

        Doctor::create([
            'department_id' => $cardiology->id,
            'name' => 'Prof. Dr. Roger Bale',
            'slug' => 'prof-dr-roger-bale',
            'title' => 'Prof. Dr.',
            'specialty' => 'Chief of Staff',
            'bio' => 'Prof. Dr. Roger Bale has been serving as the Chief of Staff, overseeing hospital-wide clinical excellence and leading cardiology developments.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f90_Rectangle%2075%20(2).webp',
        ]);

        Doctor::create([
            'department_id' => $cardiology->id,
            'name' => 'Prof. Dr. Henry Mark',
            'slug' => 'prof-dr-henry-mark',
            'title' => 'Prof. Dr.',
            'specialty' => 'Chief Medical Officer',
            'bio' => 'Prof. Dr. Henry Mark serves as our Chief Medical Officer, leading medical strategies and cardiology policies.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f93_Rectangle%2075%20(1).webp',
        ]);

        Doctor::create([
            'department_id' => $gastroenterology->id,
            'name' => 'Prof. Dr. Hua Tuo',
            'slug' => 'prof-dr-hua-tuo',
            'title' => 'Prof. Dr.',
            'specialty' => 'Chairman',
            'bio' => 'Prof. Dr. Hua Tuo is the Chairman of the board, steering the vision of TNC Medflow.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f9b_Rectangle%2075.webp',
        ]);

        Doctor::create([
            'department_id' => $pediatrics->id,
            'name' => 'Prof. Dr. Steven Chain',
            'slug' => 'prof-dr-steven-chain',
            'title' => 'Prof. Dr.',
            'specialty' => 'Hospital Administrator',
            'bio' => 'Prof. Dr. Steven Chain manages operations and hospital administration.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6fa4_Rectangle%2075%20(4).webp',
        ]);

        Doctor::create([
            'department_id' => $maternity->id,
            'name' => 'Prof. Dr. Ana Storm',
            'slug' => 'prof-dr-ana-storm',
            'title' => 'Prof. Dr.',
            'specialty' => 'Chief Nursing Officer',
            'bio' => 'Prof. Dr. Ana Storm coordinates and leads our patient-centric nursing staff.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f83_Rectangle%2075%20(3).webp',
        ]);

        // Seed Tags
        $tagHealth = Tag::create(['name' => 'Health Tips', 'slug' => 'health-tips']);
        $tagMental = Tag::create(['name' => 'Mental Health', 'slug' => 'mental-health']);
        $tagLifestyle = Tag::create(['name' => 'My Lifestyle', 'slug' => 'my-lifestyle']);
        $tagNews = Tag::create(['name' => 'Health News', 'slug' => 'health-news']);

        // Seed Blog Posts
        $post1 = BlogPost::create([
            'title' => 'A Guide to Managing Diabetes: Tips for a Balanced Lifestyle',
            'slug' => 'a-guide-to-managing-diabetes-tips-for-a-balanced-lifestyle',
            'summary' => 'Learn effective strategies for managing diabetes through healthy nutrition, regular physical activity, and medical compliance.',
            'content' => 'Managing diabetes effectively is key to a long, active, and healthy life. By adopting a balanced lifestyle, individuals with diabetes can control their blood sugar levels, reduce the risk of complications, and improve their overall well-being. Focus on balanced nutrition, regular exercise, monitoring blood glucose, medication management, and regular medical check-ups.',
            'image_path' => 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab4d307b3cdde306379d9_650a867a37d9816c7cc189e1_image.png',
            'published_at' => now()->subDays(3),
        ]);
        $post1->tags()->sync([$tagNews->id, $tagLifestyle->id]);

        $post2 = BlogPost::create([
            'title' => 'Tips for Maintaining Vitality in Your Golden Years',
            'slug' => 'tips-for-maintaining-vitality-in-your-golden-years',
            'summary' => 'Discover practical tips and health advice to stay active, energetic, and vital throughout your senior years.',
            'content' => 'Aging is a natural process, but maintaining vitality and energy is highly achievable. Focus on nutrition, physical fitness, mental sharpness, social connection, and routine health screenings to preserve your vitality.',
            'image_path' => 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab4d5861b944ecf7ac1ae_650a867a37d9816c7cc189e4_image%2520(5).png',
            'published_at' => now()->subDays(2),
        ]);
        $post2->tags()->sync([$tagHealth->id, $tagLifestyle->id]);

        $post3 = BlogPost::create([
            'title' => 'Recognizing the Signs of Stroke: Acting FAST Can Save Lives',
            'slug' => 'recognizing-the-signs-of-stroke-acting-fast-can-save-lives',
            'summary' => 'Learn the FAST method to quickly identify stroke symptoms and understand why immediate response is critical.',
            'content' => 'A stroke is a medical emergency that requires prompt action. The FAST acronym stands for: Face drooping, Arm weakness, Speech difficulty, Time to call emergency services. Acting fast minimizes brain damage and improves recovery outcomes.',
            'image_path' => 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab4d307b3cdde30637aa9_650a867a37d9816c7cc189e3_image%2520(2).png',
            'published_at' => now()->subDay(),
        ]);
        $post3->tags()->sync([$tagHealth->id, $tagMental->id]);

        $post4 = BlogPost::create([
            'title' => 'Navigating Seasonal Allergies: Tips for a Sneezing-Free Spring',
            'slug' => 'navigating-seasonal-allergies-tips-for-a-sneezing-free-spring',
            'summary' => 'Prepare for spring allergies with these helpful prevention and management tips from medical experts.',
            'content' => 'Spring brings warmth, but also pollen and seasonal allergies. Control your environment, monitor pollen counts, take preventative medications, and wash off allergens to keep your spring sneeze-free.',
            'image_path' => 'https://cdn.prod.website-files.com/650ab1019fb45c5ceb55d927/650ab4d5861b944ecf7ac1ae_650a867a37d9816c7cc189e4_image%2520(5).png',
            'published_at' => now(),
        ]);
        $post4->tags()->sync([$tagHealth->id]);

        // Seed Staff
        Staff::create([
            'name' => 'Esther Howard',
            'slug' => 'esther-howard',
            'title' => 'Nurse',
            'role' => 'Senior Nurse Coordinator',
            'bio' => 'Esther coordinates ward allocations and patient support programs.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f90_Rectangle%2075%20(2).webp',
        ]);

        Staff::create([
            'name' => 'Katheryn Murphy',
            'slug' => 'katheryn-murphy',
            'title' => 'Ms.',
            'role' => 'Lab Technician',
            'bio' => 'Katheryn leads diagnostic labs and tests operations.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6fa4_Rectangle%2075%20(4).webp',
        ]);

        Staff::create([
            'name' => 'Roger Smith',
            'slug' => 'roger-smith',
            'title' => 'Mr.',
            'role' => 'Support Coordinator',
            'bio' => 'Roger handles emergency desk registrations and support staff scheduling.',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aaac7130beb68ae6c6f83_Rectangle%2075%20(3).webp',
        ]);

        // Seed Gallery Items
        GalleryItem::create([
            'title' => 'Modern Diagnostic Equipment',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/66065ad4bdd43a51ba64c8f5_medflow-cms-gallery_hospital-things.png',
            'category' => 'hospital-things',
        ]);

        GalleryItem::create([
            'title' => 'Professional Team Ward',
            'image_path' => 'https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/66065ad4bdd43a51ba64c8f5_medflow-cms-gallery_hospital-things.png',
            'category' => 'hospital-things',
        ]);
    }
}
