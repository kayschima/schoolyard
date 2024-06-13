import {HTMLAttributes, SVGAttributes} from 'react';

export default function ApplicationLogo(props: HTMLAttributes<HTMLOrSVGElement> & SVGAttributes<HTMLOrSVGElement>) {
    return (
        <img {...props} src="/images/schoolyard.png" alt="Schoolyard"/>
    );
}
