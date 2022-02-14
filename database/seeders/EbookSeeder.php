<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ebook') -> insert([
            [
                'ebook_id' => 1,
                'title' => 'The Love Songs of W.E.B. Du Bois',
                'author' => 'Honorée Fanonne Jeffers',
                'description' => 'The Love Songs of W.E.B. Du Bois,” the first novel by Jeffers, a celebrated poet, is many things at once: a moving coming-of-age saga, an examination of race and an excavation of American history. It cuts back and forth between the tale of Ailey Pearl Garfield, a Black girl growing up at the end of the 20th century, and the “songs” of her ancestors, Native Americans and enslaved African Americans who lived through the formation of the United States. As their stories converge, “Love Songs” creates an unforgettable portrait of Black life that reveals how the past still reverberates today.'
            ],
            [
                'ebook_id' => 2,
                'title' => 'No One Is Talking About This',
                'author' => 'Patricia Lockwood',
                'description' => 'Lockwood first found acclaim as a poet on the internet, with gloriously inventive and ribald verse — sexts elevated to virtuosity. In “Priestdaddy,” her indelible 2017 memoir about growing up in rectories across the Midwest presided over by her gun-loving, guitar-playing father, a Catholic priest, she called tweeting “an art form, like sculpture, or honking the national anthem under your armpit.” Here, in her first novel, she distills the pleasures and deprivations of life split between online and flesh-and-blood interactions, transfiguring the dissonance into art. The result is a book that reads like a prose poem, at once sublime, profane, intimate, philosophical, hilarious and, eventually, deeply moving.'
            ],
            [
                'ebook_id' => 3,
                'title' => 'When We Cease to Understand the World',
                'author' => 'Benjamín Labatut',
                'description' => 'Labatut expertly stitches together the stories of the 20th century’s greatest thinkers to explore both the ecstasy and agony of scientific breakthroughs: their immense gains for society as well as their steep human costs. His journey to the outermost edges of knowledge — guided by the mathematician Alexander Grothendieck, the physicist Werner Heisenberg and the chemist Fritz Haber, among others — offers glimpses of a universe with limitless potential underlying the observable world, a “dark nucleus at the heart of things” that some of its witnesses decide is better left alone. This extraordinary hybrid of fiction and nonfiction also provokes the frisson of an extended true-or-false test: The further we read, the blurrier the line gets between fact and fabulism.'
            ],
            [
                'ebook_id' => 4,
                'title' => 'The Copenhagen Trilogy: Childhood; Youth; Dependency',
                'author' => 'Tove Ditlevsen',
                'description' => 'Ditlevsen’s gorgeous memoirs, first published in Denmark in the 1960s and ’70s and collected here in a single volume, detail her hardscrabble upbringing, career path and merciless addictions: a powerful account of the struggle to reconcile art and life. She joined the working ranks at 14, became a renowned poet by her early 20s, and found herself, after two failed marriages, wedded to a psychopathic doctor and hopelessly dependent on opioids by her 30s. Yet for all the dramatic twists of her life, these books together project a stunning clarity, humor and candidness, casting light not just on the world’s harsh realities but on the inexplicable impulses of our secret selves.'
            ],
            [
                'ebook_id' => 5,
                'title' => 'How the Word Is Passed: A Reckoning With the History of Slavery Across America',
                'author' => 'Clint Smith',
                'description' => 'For this timely and thought-provoking book, Smith, a poet and journalist, toured sites key to the history of slavery and its present-day legacy, including Thomas Jefferson’s Monticello; Angola, the Louisiana State Penitentiary; and a Confederate cemetery. Interspersing interviews with the tourists, guides, activists and local historians he meets along the way with close readings of scholarship and poignant personal reflection, Smith holds up a mirror to America’s fraught relationship with its past, capturing a potent mixture of good intentions, earnest corrective, willful ignorance and blatant distortion.'
            ],
            [
                'ebook_id' => 6,
                'title' => 'Invisible Child: Poverty, Survival and Hope in an American City',
                'author' => 'Andrea Elliott',
                'description' => 'To expand on her acclaimed 2013 series for The Times about Dasani Coates, a homeless New York schoolgirl, and her family, Elliott spent years following her subjects in their daily lives, through shelters, schools, courtrooms and welfare offices. The book she has produced — intimately reported, elegantly written and suffused with the fierce love and savvy observations of Dasani and her mother — is a searing account of one family’s struggle with poverty, homelessness and addiction in a city and country that have failed to address these issues with efficacy or compassion.'
            ],
            [
                'ebook_id' => 7,
                'title' => 'On Juneteenth',
                'author' => 'Annette Gordon-Reed',
                'description' => 'This book weaves together history and memoir into a short volume that is insightful, touching and courageous. Exploring the racial and social complexities of Texas, her home state, Gordon-Reed asks readers to step back from the current heated debates and take a more nuanced look at history and the surprises it can offer. Such a perspective comes easy to her because she was a part of history — the first Black child to integrate her East Texas school. On several occasions, she found herself shunned by whites and Blacks alike, learning at an early age that breaking the color line can be threatening to both races.'
            ],
            [
                'ebook_id' => 8,
                'title' => 'Red Comet: The Short Life and Blazing Art of Sylvia Plath',
                'author' => 'Heather Clark',
                'description' => 'It’s daring to undertake a new biography of Plath, whose life, and death by suicide at 30 in 1963, have been thoroughly picked over by scholars. Yet this meticulously researched and, at more than 1,000 pages, unexpectedly riveting portrait is a monumental achievement. Determined to rescue the poet from posthumous caricature as a doomed madwoman and “reposition her as one of the most important American writers of the 20th century,” Clark, a professor of poetry in England, delivers a transporting account of a rare literary talent and the familial and intellectual milieu that both thwarted and encouraged her, enlivened throughout by quotations from Plath’s letters, diaries, poetry and prose.'
            ],
            [
                'ebook_id' => 9,
                'title' => 'The Push: A Novel',
                'author' => 'Ashley Audrain',
                'description' => 'Fans of psychological thrillers, crack open this one about the relationship between mothers and daughters. Before Blythes daughter is born, she wants to create the deep bond she never had with her own mom. But when Violet arrives, she s convinced somethings wrong with her little girl. The tragic events that follow will make you question her sanity and the story she telling us.'
            ],
            [
                'ebook_id' => 10,
                'title' => 'A Crooked Tree: A Novel',
                'author' => 'Una Mannion',
                'description' => 'One fateful night, 15-year-old Libby s harried single mom orders her sister Ellen, 12, to get out and walk home after their bickering gets to be too much. What follows not only shatters the girls innocence, but sets off a chain of events that reveals the darkness in their sleepy town. This novel drives home how one moment can change everything. '
            ]

        ]);
    }
}
