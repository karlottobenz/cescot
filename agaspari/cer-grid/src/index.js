import { registerBlockType } from '@wordpress/blocks';
import {InnerBlocks, InspectorControls, useBlocksProps} from '@wordpress/block-editor';
import blockMeta from '../block.json';

registerBlockType (blockMeta.name, {
    title: blockMeta.title,
    description: blockMeta.description,
    category: blockMeta.category,
    icon: blockMeta.icon,
    attributes: {
        "columns": {
            "type": "number",
            "default": 3
        }
    },
    edit: (props) => {
        const blockProps = useBlocksProps();
        return <>
        <InspectorControls key="settings">
            
        </InspectorControls>
            <div {...blockProps}>
                <InnerBlocks />
            </div>;
        </>
    },
    save: (props) => {
        const blockProps = useBlocksProps.save();
        return <div {...blockProps}>
            <InnerBlocks.Content/>
        </div>;
    },
});