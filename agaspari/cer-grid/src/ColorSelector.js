import { ColorIndicator, ColorPalette, Flex, FlexItem } from '@wordpress/components'

export default function ColorSelector(props){
    const{
        value="",
        label="",
        onChange = () => {}
    } = props;

    return <>
            <ColorPalette onChange={onChange}/>
            <flex>
                <ColorIndicator colorValue={value}/>
                <FlexItem>{label}</FlexItem>
            </flex>
          </>;
}