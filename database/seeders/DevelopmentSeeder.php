<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Development;
use Illuminate\Support\Str;

class DevelopmentSeeder extends Seeder
{
    public function run(): void
    {
        $developments = [
            [
                'title_lv' => 'Web izstrāde',
                'title_en' => 'Web Development',
                'description_lv' => 'Mūsdienu web risinājumi jūsu uzņēmumam',
                'description_en' => 'Modern web solutions for your business',
                'content_lv' => '<p>Mēs piedāvājam pilnu web izstrādes ciklu, sākot no koncepcijas līdz pat izvietošanai. Mūsu komanda ir pieredzējuska dažādu tehnoloģiju izmantošanā, kas ļauj mums izveidot pielāgotus risinājumus tieši jūsu vajadzībām.</p><p>Mūsu pakalpojumi ietver:</p><ul><li>Responsīvo dizainu</li><li>Mūsdienīgas tehnoloģijas</li><li>SEO optimizāciju</li><li>Ātru darbināšanu</li><li>Drošu kodēšanu</li></ul>',
                'content_en' => '<p>We offer full-cycle web development, from concept to deployment. Our team is experienced in various technologies, allowing us to create customized solutions tailored to your specific needs.</p><p>Our services include:</p><ul><li>Responsive Design</li><li>Modern Technologies</li><li>SEO Optimization</li><li>Fast Performance</li><li>Secure Coding</li></ul>',
                'icon_class' => 'flaticon-web-development',
                'order' => 1,
                'published' => true,
            ],
            [
                'title_lv' => 'Mobilās aplikācijas',
                'title_en' => 'Mobile Applications',
                'description_lv' => 'Vietējās un hibrīdas mobilās aplikācijas',
                'description_en' => 'Native and hybrid mobile applications',
                'content_lv' => '<p>Mēs izstrādājam mobilās aplikācijas gan iOS, gan Android platformām. Mūsu eksperti izmanto jaunākās tehnoloģijas, lai nodrošinātu lietotājiem labāko pieredzi.</p><p>Mūsu pakalpojumi:</p><ul><li>Native & Hybrid Apps</li><li>Cross-Platform Development</li><li>Lietotājiem draudzīgs interfeiss</li><li>Veiktspējas optimizācija</li><li>App Store izvietošana</li></ul>',
                'content_en' => '<p>We develop mobile applications for both iOS and Android platforms. Our experts use the latest technologies to ensure the best user experience.</p><p>Our services:</p><ul><li>Native & Hybrid Apps</li><li>Cross-Platform Development</li><li>User-Friendly Interface</li><li>Performance Optimization</li><li>App Store Deployment</li></ul>',
                'icon_class' => 'flaticon-profile',
                'order' => 2,
                'published' => true,
            ],
            [
                'title_lv' => 'API izstrāde',
                'title_en' => 'API Development',
                'description_lv' => 'RESTful API un mikro servisu arhitektūra',
                'description_en' => 'RESTful APIs and microservices architecture',
                'content_lv' => '<p>Mēs izstrādājam drošus un mārogamos API, kas savieno jūsu sistēmas un nodrošina datu apmaiņu starp dažādām platformām.</p><p>Mūsu API pakalpojumi:</p><ul><li>RESTful API dizains</li><li>Mikro servisu arhitektūra</li><li>API dokumentācija</li><li>Drošības protokoli</li><li>Testēšana un monitoring</li></ul>',
                'content_en' => '<p>We develop secure and scalable APIs that connect your systems and enable data exchange between different platforms.</p><p>Our API services:</p><ul><li>RESTful API Design</li><li>Microservices Architecture</li><li>API Documentation</li><li>Security Protocols</li><li>Testing & Monitoring</li></ul>',
                'icon_class' => 'flaticon-nanotechnology',
                'order' => 3,
                'published' => true,
            ],
            [
                'title_lv' => 'DevOps pakalpojumi',
                'title_en' => 'DevOps Services',
                'description_lv' => 'Automatizēta izvietošana un CI/CD plūsmas',
                'description_en' => 'Automated deployment and CI/CD pipelines',
                'content_lv' => '<p>Mūsu DevOps eksperti palīdz optimizēt jūsu izstrādes un izvietošanas procesus, nodrošinot ātru un drošu programmatūras piegādi.</p><p>DevOps pakalpojumi:</p><ul><li>CI/CD plūsmu izstrāde</li><li>Konteinerizācija (Docker)</li><li>Mākoņu izvietošana</li><li>Monitoring & logging</li><li>Infrastruktūras kods (IaC)</li></ul>',
                'content_en' => '<p>Our DevOps experts help optimize your development and deployment processes, ensuring fast and secure software delivery.</p><p>DevOps services:</p><ul><li>CI/CD Pipeline Development</li><li>Containerization (Docker)</li><li>Cloud Deployment</li><li>Monitoring & Logging</li><li>Infrastructure as Code (IaC)</li></ul>',
                'icon_class' => 'flaticon-search',
                'order' => 4,
                'published' => true,
            ],
        ];

        foreach ($developments as $development) {
            Development::create([
                'title_lv' => $development['title_lv'],
                'title_en' => $development['title_en'],
                'description_lv' => $development['description_lv'],
                'description_en' => $development['description_en'],
                'content_lv' => $development['content_lv'],
                'content_en' => $development['content_en'],
                'icon_class' => $development['icon_class'],
                'order' => $development['order'],
                'published' => $development['published'],
                'slug' => Str::slug($development['title_en']),
            ]);
        }
    }
}
