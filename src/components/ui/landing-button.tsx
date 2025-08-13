import { cn } from "@/lib/utils";
import { cva, type VariantProps } from "class-variance-authority";

const buttonVariants = cva(
  "inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-bold shadow-elegant transition-smooth focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-95 disabled:opacity-50 disabled:pointer-events-none",
  {
    variants: {
      variant: {
        primary: "bg-gradient-primary text-primary-foreground hover:shadow-glow focus:ring-primary",
        secondary: "bg-background text-primary border-2 border-primary hover:bg-secondary focus:ring-primary",
        hero: "bg-background text-primary border-2 border-background/20 hover:bg-primary hover:text-primary-foreground focus:ring-background"
      },
      size: {
        default: "px-8 py-4 text-base",
        sm: "px-6 py-3 text-sm",
        lg: "px-10 py-5 text-lg"
      }
    },
    defaultVariants: {
      variant: "primary",
      size: "default"
    }
  }
);

export interface ButtonProps
  extends React.ButtonHTMLAttributes<HTMLButtonElement>,
    VariantProps<typeof buttonVariants> {
  asChild?: boolean;
  href?: string;
}

const LandingButton = ({ className, variant, size, href, children, ...props }: ButtonProps) => {
  if (href) {
    return (
      <a href={href} className={cn(buttonVariants({ variant, size, className }))}>
        {children}
      </a>
    );
  }

  return (
    <button className={cn(buttonVariants({ variant, size, className }))} {...props}>
      {children}
    </button>
  );
};

export { LandingButton, buttonVariants };