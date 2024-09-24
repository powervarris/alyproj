<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    class UserController extends Controller
    {
        //
        protected $users = [
            [
                "id" => 1,
                "author" => "Oliver King",
                "blog_title" => "The Future of Remote Work: Trends for 2024",
                "blog_content" => "Exploring how remote work is evolving and what to expect in the coming years.",
                "date_published" => "2024-03-01"
            ],
            [
                "id" => 2,
                "author" => "Amelia Scott",
                "blog_title" => "How to Create a Winning Brand Strategy",
                "blog_content" => "Steps to build a powerful brand that resonates with your target audience.",
                "date_published" => "2024-03-03"
            ],
            [
                "id" => 3,
                "author" => "Jacob Young",
                "blog_title" => "Blockchain Beyond Cryptocurrency",
                "blog_content" => "Applications of blockchain technology in industries like supply chain, healthcare, and more.",
                "date_published" => "2024-03-05"
            ],
            [
                "id" => 4,
                "author" => "Charlotte Hall",
                "blog_title" => "Building a Digital-First Business Model",
                "blog_content" => "How businesses are transitioning to digital-first operations and the benefits of doing so.",
                "date_published" => "2024-03-07"
            ],
            [
                "id" => 5,
                "author" => "Matthew Lopez",
                "blog_title" => "Artificial Intelligence and Creativity: Can AI Innovate?",
                "blog_content" => "An in-depth analysis of AI’s role in creative processes and its limitations.",
                "date_published" => "2024-03-09"
            ],
            [
                "id" => 6,
                "author" => "Harper Baker",
                "blog_title" => "The Psychology of Consumer Behavior",
                "blog_content" => "Understanding how psychology impacts buying decisions and how businesses can use this knowledge.",
                "date_published" => "2024-03-11"
            ],
            [
                "id" => 7,
                "author" => "Mason Phillips",
                "blog_title" => "Cloud Computing for Small Businesses: A Guide",
                "blog_content" => "A practical guide for small businesses looking to adopt cloud computing solutions.",
                "date_published" => "2024-03-13"
            ],
            [
                "id" => 8,
                "author" => "Evelyn Edwards",
                "blog_title" => "Why Diversity in Tech Matters",
                "blog_content" => "Exploring the importance of diversity in the tech industry and its impact on innovation.",
                "date_published" => "2024-03-15"
            ],
            [
                "id" => 9,
                "author" => "Aiden Walker",
                "blog_title" => "The Internet of Things (IoT): Transforming Everyday Life",
                "blog_content" => "How IoT devices are changing the way we live, from smart homes to connected healthcare.",
                "date_published" => "2024-03-17"
            ],
            [
                "id" => 10,
                "author" => "Sofia Harris",
                "blog_title" => "Green Tech: Innovations for a Sustainable Future",
                "blog_content" => "A look at the latest advancements in green technology and their role in combating climate change.",
                "date_published" => "2024-03-19"
            ]

        ];

        public function index()
        {
            return view('student.blog', ['users' => $this->users]);
        }

        public function create()
        {
            return view('student.blog-create');
        }

        public function show($id)
                {
                    $user = collect($this->users)->firstWhere('id', $id);

                    if (!$user) {
                        abort(404, 'User not found');
                    }

                    return view('student.blog-show', ['user' => $user]);
                }

                public function store(Request $request)
                {
                    $data = $request->validate([
                       'author' => 'required',
                       'blog_title' => 'required',
                       'blog_content' => 'required',
                       ]);

                       $data['id'] = count($this->users) + 1;
                       $data['date_published'] = now()->toDateString();

                       $this->users[] = $data;

                       return view('student.blog', ['users' => $this->users]);
                }

                public function edit($id)
                {
                    $user = collect($this->users)->firstWhere('id', $id);

                    if (!$user) {
                        abort(404, 'User not found');
                    }

                    return view('student.blog-edit', ['user' => $user]);
                }

                public function update(Request $request, $id)
                {
                    $data = $request->validate([
                        'author' => 'required',
                        'blog_title' => 'required',
                        'blog_content' => 'required',
                    ]);

                    $user = collect($this->users)->firstWhere('id', $id);

                    if (!$user) {
                        abort(404, 'User not found');
                    }

                    $user['author'] = $data['author'];
                    $user['blog_title'] = $data['blog_title'];
                    $user['blog_content'] = $data['blog_content'];

                    return view('student.blog-show', ['user' => $user]);
                }

                public function userCreate()
                {
                    return view('student.blog-usercreate');
                }
    }
