type Project = {
  name: string
  description: string
  link: string
  video: string
  id: string
}

type WorkExperience = {
  company: string
  title: string
  start: string
  end: string
  link: string
  id: string
}

type BlogPost = {
  title: string
  description: string
  link: string
  uid: string
}

type SocialLink = {
  label: string
  link: string
}

export const PROJECTS: Project[] = [
  // {
  //   name: 'Motion Primitives Pro',
  //   description:
  //     'Advanced components and templates to craft beautiful websites.',
  //   link: 'https://pro.motion-primitives.com/',
  //   video:
  //     'https://res.cloudinary.com/read-cv/video/upload/t_v_b/v1/1/profileItems/W2azTw5BVbMXfj7F53G92hMVIn32/newProfileItem/d898be8a-7037-4c71-af0c-8997239b050d.mp4?_a=DATAdtAAZAA0',
  //   id: 'project1',
  // },
  // {
  //   name: 'Motion Primitives',
  //   description: 'UI kit to make beautiful, animated interfaces.',
  //   link: 'https://motion-primitives.com/',
  //   video:
  //     'https://res.cloudinary.com/read-cv/video/upload/t_v_b/v1/1/profileItems/W2azTw5BVbMXfj7F53G92hMVIn32/XSfIvT7BUWbPRXhrbLed/ee6871c9-8400-49d2-8be9-e32675eabf7e.mp4?_a=DATAdtAAZAA0',
  //   id: 'project2',
  // },
]

export const WORK_EXPERIENCE: WorkExperience[] = [
  {
    company: 'Aspire',
    title: 'Lead Software Engineer',
    start: '2022',
    end: 'Present',
    link: 'https://aspireapp.com/',
    id: 'work1',
  },
  {
    company: 'Subdine',
    title: 'Senior Software Engineer',
    start: '2021',
    end: '2022',
    link: 'https://in.linkedin.com/company/subdine',
    id: 'work2',
  },
   {
    company: 'Neopath Technologies Pvt Ltd',
    title: 'Tech Lead',
    start: '2018',
    end: '2021',
    link: 'https://neopathtech.com/',
    id: 'work3',
  },
  {
    company: 'Freelance',
    title: 'Fullstack Developer',
    start: '2015',
    end: '2018',
    link: '#',
    id: 'work4',
  },
]

export const BLOG_POSTS: BlogPost[] = [
  // {
  //   title: 'Exploring the Intersection of Design, AI, and Design Engineering',
  //   description: 'How AI is changing the way we design',
  //   link: '/blog/exploring-the-intersection-of-design-ai-and-design-engineering',
  //   uid: 'blog-1',
  // },
]

export const SOCIAL_LINKS: SocialLink[] = [
  {
    label: 'Github',
    link: 'https://github.com/Jindon',
  },
  {
    label: 'Twitter',
    link: 'https://x.com/mbiswanath27',
  },
  {
    label: 'LinkedIn',
    link: 'https://www.linkedin.com/in/mbiswanath',
  },
]

export const EMAIL = 'jindon27@gmail.com'
