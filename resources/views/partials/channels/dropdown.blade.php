<select name="{{ $field ?? 'channel_id' }}">
    @foreach ($channels as $channel)
        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
    @endforeach
</select>
