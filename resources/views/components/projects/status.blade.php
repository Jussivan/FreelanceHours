@props(['status'])
<span 
    {{ $attributes->class([
            'rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide',
            'bg-[#72b01d] text-[#3f7d20]' => $status == App\ProjectStatus::Open,
            'bg-[#c1121f] text-[#780000]' => $status == App\ProjectStatus::Closed,
        ]) }}>
    {{ $status->label() }}
</span>