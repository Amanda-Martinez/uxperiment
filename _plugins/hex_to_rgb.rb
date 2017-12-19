module Jekyll
  module HexToRGB
    def hex_to_rgb(hexval)
      if hexval.length.even?
        hexval.scan(/../).map {|color| color.to_i(16)}
      else
        hexval.scan(/./).map {|color| (color+color).to_i(16)}
      end
    end
  end
end

Liquid::Template.register_filter(Jekyll::HexToRGB)
