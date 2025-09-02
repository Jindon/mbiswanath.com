'use client'
import { TextEffect } from '@/components/ui/text-effect'
import Link from 'next/link'

export function Header() {
  return (
    <header className="mb-8 flex items-center justify-between">
      <div>
        <Link href="/" className="flex items-center font-medium text-black dark:text-white">
           <img
            src="bis.png"
            className="h-20 w-20 rounded-full object-cover"
          />
         <div className="ml-2">
          <span>M. Biswanath</span>
          <TextEffect
            as="p"
            preset="fade"
            per="char"
            className="text-zinc-600 dark:text-zinc-500"
            delay={0.5}
          >
            Software Engineer
          </TextEffect>
        </div>
        </Link>
      </div>
    </header>
  )
}
